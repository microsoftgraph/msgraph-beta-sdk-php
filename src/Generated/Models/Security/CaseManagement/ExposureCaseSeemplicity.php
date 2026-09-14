<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExposureCaseSeemplicity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExposureCaseSeemplicity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExposureCaseSeemplicity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExposureCaseSeemplicity {
        return new ExposureCaseSeemplicity();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the configurationId property value. The configurationId property
     * @return string|null
    */
    public function getConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('configurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationId'");
    }

    /**
     * Gets the configurationName property value. The configurationName property
     * @return string|null
    */
    public function getConfigurationName(): ?string {
        $val = $this->getBackingStore()->get('configurationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configurationId' => fn(ParseNode $n) => $o->setConfigurationId($n->getStringValue()),
            'configurationName' => fn(ParseNode $n) => $o->setConfigurationName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'providerType' => fn(ParseNode $n) => $o->setProviderType($n->getStringValue()),
            'syncStatus' => fn(ParseNode $n) => $o->setSyncStatus($n->getStringValue()),
            'ticketCreationTime' => fn(ParseNode $n) => $o->setTicketCreationTime($n->getDateTimeValue()),
            'ticketId' => fn(ParseNode $n) => $o->setTicketId($n->getStringValue()),
            'ticketLink' => fn(ParseNode $n) => $o->setTicketLink($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the providerType property value. The providerType property
     * @return string|null
    */
    public function getProviderType(): ?string {
        $val = $this->getBackingStore()->get('providerType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerType'");
    }

    /**
     * Gets the syncStatus property value. The syncStatus property
     * @return string|null
    */
    public function getSyncStatus(): ?string {
        $val = $this->getBackingStore()->get('syncStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncStatus'");
    }

    /**
     * Gets the ticketCreationTime property value. The ticketCreationTime property
     * @return DateTime|null
    */
    public function getTicketCreationTime(): ?DateTime {
        $val = $this->getBackingStore()->get('ticketCreationTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketCreationTime'");
    }

    /**
     * Gets the ticketId property value. The ticketId property
     * @return string|null
    */
    public function getTicketId(): ?string {
        $val = $this->getBackingStore()->get('ticketId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketId'");
    }

    /**
     * Gets the ticketLink property value. The ticketLink property
     * @return string|null
    */
    public function getTicketLink(): ?string {
        $val = $this->getBackingStore()->get('ticketLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketLink'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('configurationId', $this->getConfigurationId());
        $writer->writeStringValue('configurationName', $this->getConfigurationName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('providerType', $this->getProviderType());
        $writer->writeStringValue('syncStatus', $this->getSyncStatus());
        $writer->writeDateTimeValue('ticketCreationTime', $this->getTicketCreationTime());
        $writer->writeStringValue('ticketId', $this->getTicketId());
        $writer->writeStringValue('ticketLink', $this->getTicketLink());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the configurationId property value. The configurationId property
     * @param string|null $value Value to set for the configurationId property.
    */
    public function setConfigurationId(?string $value): void {
        $this->getBackingStore()->set('configurationId', $value);
    }

    /**
     * Sets the configurationName property value. The configurationName property
     * @param string|null $value Value to set for the configurationName property.
    */
    public function setConfigurationName(?string $value): void {
        $this->getBackingStore()->set('configurationName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the providerType property value. The providerType property
     * @param string|null $value Value to set for the providerType property.
    */
    public function setProviderType(?string $value): void {
        $this->getBackingStore()->set('providerType', $value);
    }

    /**
     * Sets the syncStatus property value. The syncStatus property
     * @param string|null $value Value to set for the syncStatus property.
    */
    public function setSyncStatus(?string $value): void {
        $this->getBackingStore()->set('syncStatus', $value);
    }

    /**
     * Sets the ticketCreationTime property value. The ticketCreationTime property
     * @param DateTime|null $value Value to set for the ticketCreationTime property.
    */
    public function setTicketCreationTime(?DateTime $value): void {
        $this->getBackingStore()->set('ticketCreationTime', $value);
    }

    /**
     * Sets the ticketId property value. The ticketId property
     * @param string|null $value Value to set for the ticketId property.
    */
    public function setTicketId(?string $value): void {
        $this->getBackingStore()->set('ticketId', $value);
    }

    /**
     * Sets the ticketLink property value. The ticketLink property
     * @param string|null $value Value to set for the ticketLink property.
    */
    public function setTicketLink(?string $value): void {
        $this->getBackingStore()->set('ticketLink', $value);
    }

}
