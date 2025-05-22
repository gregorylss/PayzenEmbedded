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
 * Représente l’historique de transaction PayzenEmbedded.
 */
#[ApiResource(
    operations: [
        new GetCollection(
            uriTemplate: '/payzen-embedded/transaction-histories',
            provider: PropelCollectionProvider::class
        ),
        new Get(
            uriTemplate: '/payzen-embedded/transaction-histories/{id}',
            provider: PropelItemProvider::class
        )
    ],
    normalizationContext: ['groups' => [self::GROUP_READ]]
)]

#[ApiFilter(
    filterClass: SearchFilter::class,
    properties: [
        'id',
        'orderId',
        'customerId',
        'adminId',
        'transactionRef',
    ]
)]
class TransactionHistory
{
    public const GROUP_READ = 'transaction_history_read';

    #[Groups([self::GROUP_READ])]
    public ?int $id = null;

    #[Groups([self::GROUP_READ])]
    public ?int $orderId = null;

    #[Groups([self::GROUP_READ])]
    public ?int $customerId = null;

    #[Groups([self::GROUP_READ])]
    public ?int $adminId = null;

    #[Groups([self::GROUP_READ])]
    public ?string $transactionRef = null;

    #[Groups([self::GROUP_READ])]
    public ?string $status = null;

    #[Groups([self::GROUP_READ])]
    public ?string $detailedStatus = null;

    #[Groups([self::GROUP_READ])]
    public ?int $amount = null;

    #[Groups([self::GROUP_READ])]
    public ?int $currencyId = null;

    #[Groups([self::GROUP_READ])]
    public ?string $creationDate = null;

    #[Groups([self::GROUP_READ])]
    public ?string $errorCode = null;

    #[Groups([self::GROUP_READ])]
    public ?string $errorMessage = null;

    #[Groups([self::GROUP_READ])]
    public ?string $detailedErrorCode = null;

    #[Groups([self::GROUP_READ])]
    public ?string $detailedErrorMessage = null;

    #[Groups([self::GROUP_READ])]
    public ?bool $isFinished = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    public function setOrderId(?int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getAdminId(): ?int
    {
        return $this->adminId;
    }
    public function setAdminId(?int $adminId): void
    {
        $this->adminId = $adminId;
    }

    public function getTransactionRef(): ?string
    {
        return $this->transactionRef;
    }
    public function setTransactionRef(?string $transactionRef): void
    {
        $this->transactionRef = $transactionRef;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getDetailedStatus(): ?string
    {
        return $this->detailedStatus;
    }
    public function setDetailedStatus(?string $detailedStatus): void
    {
        $this->detailedStatus = $detailedStatus;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }
    public function setCurrencyId(?int $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    public function setCreationDate(?string $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getDetailedErrorCode(): ?string
    {
        return $this->detailedErrorCode;
    }
    public function setDetailedErrorCode(?string $detailedErrorCode): void
    {
        $this->detailedErrorCode = $detailedErrorCode;
    }

    public function getDetailedErrorMessage(): ?string
    {
        return $this->detailedErrorMessage;
    }
    public function setDetailedErrorMessage(?string $detailedErrorMessage): void
    {
        $this->detailedErrorMessage = $detailedErrorMessage;
    }

    public function isFinished(): ?bool
    {
        return $this->isFinished;
    }
    public function setIsFinished(?bool $isFinished): void
    {
        $this->isFinished = $isFinished;
    }
}
