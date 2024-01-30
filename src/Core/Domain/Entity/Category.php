<?php

namespace Core\Domain\Entity;
use Core\Domain\Entity\Traits\MethodsMagicsTrait;
use Core\Domain\Exception\EntityValidationException;

class Category
{
    use MethodsMagicsTrait;

    /**
     * @throws EntityValidationException
     */
    public function __construct(
        protected string $id = '',
        protected string $name = '',
        protected string $description = '',
        protected bool $isActive = true,
    )
    {
        $this->validate();
    }

    public function activate(): void
    {
        $this->isActive = true;
    }

    public function desable(): void
    {
        $this->isActive = false;
    }

    /**
     * @throws EntityValidationException
     */
    public function update(string $name, string $description = ''): void
    {
        $this->name = $name;
        $this->description = $description;
        $this->validate();
    }


    /**
     * @throws EntityValidationException
     */
    public function validate(): void
    {
        if (empty($this->name)){
            throw new EntityValidationException("Nome Inválido");
        }

        if (strlen($this->name) > 255  || strlen($this->name) < 3){
            throw new EntityValidationException("Nome le Inválido");
        }

        if ($this->description != '' && (strlen($this->description) > 255  || strlen($this->description) < 3)){
            throw new EntityValidationException("Descrição Inválido");
        }
    }
}