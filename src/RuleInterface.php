<?php

declare(strict_types=1);

namespace Yiisoft\Validator;

interface RuleInterface
{
    /**
     * Validates the value
     *
     * @param mixed $value value to be validated
     * @param DataSetInterface|null $dataSet optional data set that could be used for contextual validation
     * @param bool $previousRulesErrored set to true if rule is part of a group of rules and one of the previous validations failed
     * @return Result
     */
    public function validate($value, DataSetInterface $dataSet = null, bool $previousRulesErrored = false): Result;

    /**
     * Get name of the rule to be used when rule is converted to array.
     * By default it returns base name of the class, first letter in lowercase.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns rule options as array.
     * @return array
     */
    public function getOptions(): array;
}
