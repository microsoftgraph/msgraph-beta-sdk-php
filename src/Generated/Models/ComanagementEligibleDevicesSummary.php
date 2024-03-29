<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ComanagementEligibleDevicesSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ComanagementEligibleDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComanagementEligibleDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComanagementEligibleDevicesSummary {
        return new ComanagementEligibleDevicesSummary();
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
     * Gets the comanagedCount property value. Count of devices already Co-Managed
     * @return int|null
    */
    public function getComanagedCount(): ?int {
        $val = $this->getBackingStore()->get('comanagedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comanagedCount'");
    }

    /**
     * Gets the eligibleButNotAzureAdJoinedCount property value. Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
     * @return int|null
    */
    public function getEligibleButNotAzureAdJoinedCount(): ?int {
        $val = $this->getBackingStore()->get('eligibleButNotAzureAdJoinedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibleButNotAzureAdJoinedCount'");
    }

    /**
     * Gets the eligibleCount property value. Count of devices fully eligible for Co-Management
     * @return int|null
    */
    public function getEligibleCount(): ?int {
        $val = $this->getBackingStore()->get('eligibleCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibleCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comanagedCount' => fn(ParseNode $n) => $o->setComanagedCount($n->getIntegerValue()),
            'eligibleButNotAzureAdJoinedCount' => fn(ParseNode $n) => $o->setEligibleButNotAzureAdJoinedCount($n->getIntegerValue()),
            'eligibleCount' => fn(ParseNode $n) => $o->setEligibleCount($n->getIntegerValue()),
            'ineligibleCount' => fn(ParseNode $n) => $o->setIneligibleCount($n->getIntegerValue()),
            'needsOsUpdateCount' => fn(ParseNode $n) => $o->setNeedsOsUpdateCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduledForEnrollmentCount' => fn(ParseNode $n) => $o->setScheduledForEnrollmentCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the ineligibleCount property value. Count of devices ineligible for Co-Management
     * @return int|null
    */
    public function getIneligibleCount(): ?int {
        $val = $this->getBackingStore()->get('ineligibleCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ineligibleCount'");
    }

    /**
     * Gets the needsOsUpdateCount property value. Count of devices that will be eligible for Co-Management after an OS update
     * @return int|null
    */
    public function getNeedsOsUpdateCount(): ?int {
        $val = $this->getBackingStore()->get('needsOsUpdateCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'needsOsUpdateCount'");
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
     * Gets the scheduledForEnrollmentCount property value. Count of devices scheduled for Co-Management enrollment. Valid values 0 to 9999999
     * @return int|null
    */
    public function getScheduledForEnrollmentCount(): ?int {
        $val = $this->getBackingStore()->get('scheduledForEnrollmentCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledForEnrollmentCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('comanagedCount', $this->getComanagedCount());
        $writer->writeIntegerValue('eligibleButNotAzureAdJoinedCount', $this->getEligibleButNotAzureAdJoinedCount());
        $writer->writeIntegerValue('eligibleCount', $this->getEligibleCount());
        $writer->writeIntegerValue('ineligibleCount', $this->getIneligibleCount());
        $writer->writeIntegerValue('needsOsUpdateCount', $this->getNeedsOsUpdateCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('scheduledForEnrollmentCount', $this->getScheduledForEnrollmentCount());
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
     * Sets the comanagedCount property value. Count of devices already Co-Managed
     * @param int|null $value Value to set for the comanagedCount property.
    */
    public function setComanagedCount(?int $value): void {
        $this->getBackingStore()->set('comanagedCount', $value);
    }

    /**
     * Sets the eligibleButNotAzureAdJoinedCount property value. Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
     * @param int|null $value Value to set for the eligibleButNotAzureAdJoinedCount property.
    */
    public function setEligibleButNotAzureAdJoinedCount(?int $value): void {
        $this->getBackingStore()->set('eligibleButNotAzureAdJoinedCount', $value);
    }

    /**
     * Sets the eligibleCount property value. Count of devices fully eligible for Co-Management
     * @param int|null $value Value to set for the eligibleCount property.
    */
    public function setEligibleCount(?int $value): void {
        $this->getBackingStore()->set('eligibleCount', $value);
    }

    /**
     * Sets the ineligibleCount property value. Count of devices ineligible for Co-Management
     * @param int|null $value Value to set for the ineligibleCount property.
    */
    public function setIneligibleCount(?int $value): void {
        $this->getBackingStore()->set('ineligibleCount', $value);
    }

    /**
     * Sets the needsOsUpdateCount property value. Count of devices that will be eligible for Co-Management after an OS update
     * @param int|null $value Value to set for the needsOsUpdateCount property.
    */
    public function setNeedsOsUpdateCount(?int $value): void {
        $this->getBackingStore()->set('needsOsUpdateCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduledForEnrollmentCount property value. Count of devices scheduled for Co-Management enrollment. Valid values 0 to 9999999
     * @param int|null $value Value to set for the scheduledForEnrollmentCount property.
    */
    public function setScheduledForEnrollmentCount(?int $value): void {
        $this->getBackingStore()->set('scheduledForEnrollmentCount', $value);
    }

}
