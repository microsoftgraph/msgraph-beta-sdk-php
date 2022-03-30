<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<OfficeClientConfiguration>|null $clientConfigurations List of office Client configuration. */
    private ?array $clientConfigurations = null;
    
    /** @var array<OfficeClientCheckinStatus>|null $tenantCheckinStatuses List of office Client check-in status. */
    private ?array $tenantCheckinStatuses = null;
    
    /** @var OfficeUserCheckinSummary|null $tenantUserCheckinSummary Entity that describes tenant check-in statues */
    private ?OfficeUserCheckinSummary $tenantUserCheckinSummary = null;
    
    /**
     * Instantiates a new OfficeConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OfficeConfiguration {
        return new OfficeConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientConfigurations property value. List of office Client configuration.
     * @return array<OfficeClientConfiguration>|null
    */
    public function getClientConfigurations(): ?array {
        return $this->clientConfigurations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'clientConfigurations' => function (self $o, ParseNode $n) { $o->setClientConfigurations($n->getCollectionOfObjectValues(OfficeClientConfiguration::class)); },
            'tenantCheckinStatuses' => function (self $o, ParseNode $n) { $o->setTenantCheckinStatuses($n->getCollectionOfObjectValues(OfficeClientCheckinStatus::class)); },
            'tenantUserCheckinSummary' => function (self $o, ParseNode $n) { $o->setTenantUserCheckinSummary($n->getObjectValue(OfficeUserCheckinSummary::class)); },
        ];
    }

    /**
     * Gets the tenantCheckinStatuses property value. List of office Client check-in status.
     * @return array<OfficeClientCheckinStatus>|null
    */
    public function getTenantCheckinStatuses(): ?array {
        return $this->tenantCheckinStatuses;
    }

    /**
     * Gets the tenantUserCheckinSummary property value. Entity that describes tenant check-in statues
     * @return OfficeUserCheckinSummary|null
    */
    public function getTenantUserCheckinSummary(): ?OfficeUserCheckinSummary {
        return $this->tenantUserCheckinSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('clientConfigurations', $this->clientConfigurations);
        $writer->writeCollectionOfObjectValues('tenantCheckinStatuses', $this->tenantCheckinStatuses);
        $writer->writeObjectValue('tenantUserCheckinSummary', $this->tenantUserCheckinSummary);
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
     * Sets the clientConfigurations property value. List of office Client configuration.
     *  @param array<OfficeClientConfiguration>|null $value Value to set for the clientConfigurations property.
    */
    public function setClientConfigurations(?array $value ): void {
        $this->clientConfigurations = $value;
    }

    /**
     * Sets the tenantCheckinStatuses property value. List of office Client check-in status.
     *  @param array<OfficeClientCheckinStatus>|null $value Value to set for the tenantCheckinStatuses property.
    */
    public function setTenantCheckinStatuses(?array $value ): void {
        $this->tenantCheckinStatuses = $value;
    }

    /**
     * Sets the tenantUserCheckinSummary property value. Entity that describes tenant check-in statues
     *  @param OfficeUserCheckinSummary|null $value Value to set for the tenantUserCheckinSummary property.
    */
    public function setTenantUserCheckinSummary(?OfficeUserCheckinSummary $value ): void {
        $this->tenantUserCheckinSummary = $value;
    }

}
