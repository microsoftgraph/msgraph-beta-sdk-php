<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantContract implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $contractType The type of relationship that exists between the managing entity and tenant. Optional. Read-only. */
    private ?int $contractType = null;
    
    /** @var string|null $defaultDomainName The default domain name for the tenant. Required. Read-only. */
    private ?string $defaultDomainName = null;
    
    /** @var string|null $displayName The display name for the tenant. Optional. Read-only. */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new tenantContract and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantContract
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TenantContract {
        return new TenantContract();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contractType property value. The type of relationship that exists between the managing entity and tenant. Optional. Read-only.
     * @return int|null
    */
    public function getContractType(): ?int {
        return $this->contractType;
    }

    /**
     * Gets the defaultDomainName property value. The default domain name for the tenant. Required. Read-only.
     * @return string|null
    */
    public function getDefaultDomainName(): ?string {
        return $this->defaultDomainName;
    }

    /**
     * Gets the displayName property value. The display name for the tenant. Optional. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'contractType' => function (self $o, ParseNode $n) { $o->setContractType($n->getIntegerValue()); },
            'defaultDomainName' => function (self $o, ParseNode $n) { $o->setDefaultDomainName($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('contractType', $this->contractType);
        $writer->writeStringValue('defaultDomainName', $this->defaultDomainName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the contractType property value. The type of relationship that exists between the managing entity and tenant. Optional. Read-only.
     *  @param int|null $value Value to set for the contractType property.
    */
    public function setContractType(?int $value ): void {
        $this->contractType = $value;
    }

    /**
     * Sets the defaultDomainName property value. The default domain name for the tenant. Required. Read-only.
     *  @param string|null $value Value to set for the defaultDomainName property.
    */
    public function setDefaultDomainName(?string $value ): void {
        $this->defaultDomainName = $value;
    }

    /**
     * Sets the displayName property value. The display name for the tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
