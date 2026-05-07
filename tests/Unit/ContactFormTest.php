<?php
/**
 * Unit tests untuk fungsi validateContactForm() dan sanitizeContactInput()
 * dari src/contact_functions.php.
 *
 * Requirements: 8.2, 8.3, 8.4
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // -------------------------------------------------------------------------
    // Helper: input valid lengkap
    // -------------------------------------------------------------------------

    private function validInput(): array
    {
        return [
            'full_name' => 'Budi Santoso',
            'email'     => 'budi@example.com',
            'subject'   => 'Pertanyaan Pendaftaran',
            'message'   => 'Saya ingin mengetahui informasi lebih lanjut.',
        ];
    }

    // =========================================================================
    // 1. Validasi — field wajib kosong
    // =========================================================================

    /** @test */
    public function semuaFieldKosong_menghasilkanError(): void
    {
        $input = [
            'full_name' => '',
            'email'     => '',
            'subject'   => '',
            'message'   => '',
        ];

        $errors = validateContactForm($input);

        $this->assertNotEmpty($errors, 'Semua field kosong harus menghasilkan error.');
    }

    /** @test */
    public function fullNameKosong_menghasilkanErrorFullName(): void
    {
        $input              = $this->validInput();
        $input['full_name'] = '';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('full_name', $errors);
    }

    /** @test */
    public function emailKosong_menghasilkanErrorEmail(): void
    {
        $input          = $this->validInput();
        $input['email'] = '';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('email', $errors);
    }

    /** @test */
    public function subjectKosong_menghasilkanErrorSubject(): void
    {
        $input            = $this->validInput();
        $input['subject'] = '';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('subject', $errors);
    }

    /** @test */
    public function messageKosong_menghasilkanErrorMessage(): void
    {
        $input            = $this->validInput();
        $input['message'] = '';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('message', $errors);
    }

    /** @test */
    public function fieldHanyaSpasi_dianggapKosong(): void
    {
        $input = [
            'full_name' => '   ',
            'email'     => '   ',
            'subject'   => '   ',
            'message'   => '   ',
        ];

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('full_name', $errors, 'full_name berisi spasi harus dianggap kosong.');
        $this->assertArrayHasKey('email', $errors, 'email berisi spasi harus dianggap kosong.');
        $this->assertArrayHasKey('subject', $errors, 'subject berisi spasi harus dianggap kosong.');
        $this->assertArrayHasKey('message', $errors, 'message berisi spasi harus dianggap kosong.');
    }

    // =========================================================================
    // 2. Validasi — format email
    // =========================================================================

    /** @test */
    public function emailValid_tidakMenghasilkanErrorEmail(): void
    {
        $input          = $this->validInput();
        $input['email'] = 'user@example.com';

        $errors = validateContactForm($input);

        $this->assertArrayNotHasKey('email', $errors, 'Email valid tidak boleh menghasilkan error.');
    }

    /** @test */
    public function emailTidakValid_bukanEmail_menghasilkanErrorEmail(): void
    {
        $input          = $this->validInput();
        $input['email'] = 'bukan-email';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('email', $errors);
    }

    /** @test */
    public function emailTidakValid_tanpaDomain_menghasilkanErrorEmail(): void
    {
        $input          = $this->validInput();
        $input['email'] = 'user@';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('email', $errors);
    }

    /** @test */
    public function emailTidakValid_domainDiawaliTitik_menghasilkanErrorEmail(): void
    {
        $input          = $this->validInput();
        $input['email'] = 'user@.com';

        $errors = validateContactForm($input);

        $this->assertArrayHasKey('email', $errors);
    }

    // =========================================================================
    // 3. Validasi — input valid lengkap
    // =========================================================================

    /** @test */
    public function semuaFieldValid_menghasilkanArrayErrorKosong(): void
    {
        $errors = validateContactForm($this->validInput());

        $this->assertEmpty($errors, 'Input valid lengkap tidak boleh menghasilkan error apapun.');
    }

    // =========================================================================
    // 4. Sanitasi — karakter HTML
    // =========================================================================

    /** @test */
    public function sanitasi_scriptTag_tidakMengandungTagMentah(): void
    {
        $input = [
            'message' => "<script>alert('xss')</script>",
        ];

        $sanitized = sanitizeContactInput($input);

        $this->assertStringNotContainsString(
            '<script>',
            $sanitized['message'],
            'Tag <script> mentah tidak boleh ada setelah sanitasi.'
        );
        $this->assertStringNotContainsString(
            '</script>',
            $sanitized['message'],
            'Tag </script> mentah tidak boleh ada setelah sanitasi.'
        );
    }

    /** @test */
    public function sanitasi_doubleQuote_diEscape(): void
    {
        $input = [
            'message' => '"quotes"',
        ];

        $sanitized = sanitizeContactInput($input);

        $this->assertStringNotContainsString(
            '"',
            $sanitized['message'],
            'Tanda kutip ganda mentah tidak boleh ada setelah sanitasi.'
        );
    }

    /** @test */
    public function sanitasi_singleQuote_diEscape(): void
    {
        $input = [
            'message' => "'apostrophe'",
        ];

        $sanitized = sanitizeContactInput($input);

        $this->assertStringNotContainsString(
            "'",
            $sanitized['message'],
            'Tanda kutip tunggal mentah tidak boleh ada setelah sanitasi.'
        );
    }

    /** @test */
    public function sanitasi_ampersand_diEscape(): void
    {
        $input = [
            'message' => '&ampersand',
        ];

        $sanitized = sanitizeContactInput($input);

        // Setelah sanitasi, & harus menjadi &amp; (tidak ada & mentah)
        $this->assertStringNotContainsString(
            '&ampersand',
            $sanitized['message'],
            'Ampersand mentah tidak boleh ada setelah sanitasi.'
        );
    }
}
