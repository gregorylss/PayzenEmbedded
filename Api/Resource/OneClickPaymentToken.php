<?php

namespace PayzenEmbedded\Api\Resource;

use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Thelia\Api\Bridge\Propel\Filter\SearchFilter;
use Thelia\Api\Bridge\Propel\State\PropelCollectionProvider;
use Thelia\Api\Bridge\Propel\State\PropelItemProvider;

/**
 * Représente un token de paiement "One Click".
 */
#[ApiResource(
    operations: [
        new GetCollection(
            uriTemplate: '/payzen-embedded/tokens',
            provider: PropelCollectionProvider::class
        ),
        new Get(
            uriTemplate: '/payzen-embedded/tokens/{id}',
            provider: PropelItemProvider::class
        )
    ],
    normalizationContext: ['groups' => [self::GROUP_READ]],
)]

#[ApiFilter(
    filterClass: SearchFilter::class,
    properties: [
        'id',
        'customerId',
    ]
)]

class OneClickPaymentToken
{

    public const GROUP_READ = 'one_click_payment_token_read';

    #[Groups([self::GROUP_READ])]
    public ?int $id = null;

    #[Groups([self::GROUP_READ])]
    public ?int $customerId = null;

    #[Groups([self::GROUP_READ])]
    public ?string $payment_token = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getPaymentToken(): ?string
    {
        return $this->payment_token;
    }

    public function setPaymentToken(?string $payment_token): void
    {
        $this->payment_token = $payment_token;
    }
}
