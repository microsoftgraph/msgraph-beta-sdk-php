<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OfficeConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OfficeConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeConfiguration {
        return new OfficeConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientConfigurations property value. List of office Client configuration.
     * @return array<OfficeClientConfiguration>|null
    */
    public function getClientConfigurations(): ?array {
        return $this->getBackingStore()->get('clientConfigurations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientConfigurations' => fn(ParseNode $n) => $o->setClientConfigurations($n->getCollectionOfObjectValues([OfficeClientConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantCheckinStatuses' => fn(ParseNode $n) => $o->setTenantCheckinStatuses($n->getCollectionOfObjectValues([OfficeClientCheckinStatus::class, 'createFromDiscriminatorValue'])),
            'tenantUserCheckinSummary' => fn(ParseNode $n) => $o->setTenantUserCheckinSummary($n->getObjectValue([OfficeUserCheckinSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the tenantCheckinStatuses property value. List of office Client check-in status.
     * @return array<OfficeClientCheckinStatus>|null
    */
    public function getTenantCheckinStatuses(): ?array {
        return $this->getBackingStore()->get('tenantCheckinStatuses');
    }

    /**
     * Gets the tenantUserCheckinSummary property value. Entity that describes tenant check-in statues
     * @return OfficeUserCheckinSummary|null
    */
    public function getTenantUserCheckinSummary(): ?OfficeUserCheckinSummary {
        return $this->getBackingStore()->get('tenantUserCheckinSummary');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('clientConfigurations', $this->getClientConfigurations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('tenantCheckinStatuses', $this->getTenantCheckinStatuses());
        $writer->writeObjectValue('tenantUserCheckinSummary', $this->getTenantUserCheckinSummary());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientConfigurations property value. List of office Client configuration.
     * @param array<OfficeClientConfiguration>|null $value Value to set for the clientConfigurations property.
    */
    public function setClientConfigurations(?array $value): void {
        $this->getBackingStore()->set('clientConfigurations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantCheckinStatuses property value. List of office Client check-in status.
     * @param array<OfficeClientCheckinStatus>|null $value Value to set for the tenantCheckinStatuses property.
    */
    public function setTenantCheckinStatuses(?array $value): void {
        $this->getBackingStore()->set('tenantCheckinStatuses', $value);
    }

    /**
     * Sets the tenantUserCheckinSummary property value. Entity that describes tenant check-in statues
     * @param OfficeUserCheckinSummary|null $value Value to set for the tenantUserCheckinSummary property.
    */
    public function setTenantUserCheckinSummary(?OfficeUserCheckinSummary $value): void {
        $this->getBackingStore()->set('tenantUserCheckinSummary', $value);
    }

}
