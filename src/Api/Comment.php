<?php

namespace Awork\Api;

use Awork\Collections\CommentCollection;
use Awork\Model\Comment as CommentModel;

class Comment extends Endpoint
{
    public const ENDPOINT = '%s/%s/comments';

    public function get(string $entityType, string $entityId): CommentCollection
    {
        return CommentCollection::fromArray(
            $this->api->get(sprintf(self::ENDPOINT, $entityType, $entityId))->json()
        );
    }

    public function create(string $entityType, string $entityId, string $message, ?string $userId = null): CommentModel
    {
        return new CommentModel(
            $this->api->post(sprintf(self::ENDPOINT, $entityType, $entityId), [
                'message' => $message,
                'userId' => $userId,
            ])->json()
        );
    }
}
