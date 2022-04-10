<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class PsyshConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $variables;
    
    /**
     * @return $this
     */
    public function variables(string $variable_name, mixed $value): static
    {
        $this->variables[$variable_name] = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'psysh';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['variables'])) {
            $this->variables = $value['variables'];
            unset($value['variables']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->variables) {
            $output['variables'] = $this->variables;
        }
    
        return $output;
    }

}
