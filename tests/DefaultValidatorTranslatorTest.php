<?php declare(strict_types=1);

namespace Starlit\Validation;

class DefaultValidatorTranslatorTest extends \PHPUnit_Framework_TestCase
{
    public function testTranslation(): void
    {
        $translator = new DefaultValidatorTranslator();
        $validator = new Validator([], $translator);

        $result = $validator->validateValue(null, ['required' => true]);
        $this->assertEquals('Field must be filled in.', $result);
    }

    public function testTransNonExistantTextId(): void
    {
        $translator = new DefaultValidatorTranslator();
        $this->assertEquals('lemmeltag', $translator->trans('lemmeltag'));
    }
}
