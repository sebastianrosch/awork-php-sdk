<?php

namespace Awork\Model;

class Comment
{
    private string $id;
    private string $entityType;
    private string $entityId;
    private ?User $user;
    private string $formattedMessage;
    private string $plainFormattedMessage;

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? '';
        $this->entityType = $data['entityType'] ?? '';
        $this->entityId = $data['entityId'] ?? '';
        $this->user = isset($data['user']) ? new User($data['user']) : null;
        $this->formattedMessage = $data['formattedMessage'] ?? '';
        $this->plainFormattedMessage = $data['plainFormattedMessage'] ?? '';
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEntityType(): string
    {
        return $this->entityType;
    }

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function getFormattedMessage(): string
    {
        return $this->formattedMessage;
    }

    public function getPlainFormattedMessage(): string
    {
        return $this->plainFormattedMessage;
    }
}