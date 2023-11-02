<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CrossTenantAccess implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new crossTenantAccess and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccess {
        return new CrossTenantAccess();
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
     * Gets the deviceCount property value. The deviceCount property
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'lastAccessDateTime' => fn(ParseNode $n) => $o->setLastAccessDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceTenantId' => fn(ParseNode $n) => $o->setResourceTenantId($n->getStringValue()),
            'resourceTenantName' => fn(ParseNode $n) => $o->setResourceTenantName($n->getStringValue()),
            'resourceTenantPrimaryDomain' => fn(ParseNode $n) => $o->setResourceTenantPrimaryDomain($n->getStringValue()),
            'usageStatus' => fn(ParseNode $n) => $o->setUsageStatus($n->getEnumValue(UsageStatus::class)),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastAccessDateTime property value. The lastAccessDateTime property
     * @return DateTime|null
    */
    public function getLastAccessDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAccessDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAccessDateTime'");
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
     * Gets the resourceTenantId property value. The resourceTenantId property
     * @return string|null
    */
    public function getResourceTenantId(): ?string {
        $val = $this->getBackingStore()->get('resourceTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTenantId'");
    }

    /**
     * Gets the resourceTenantName property value. The resourceTenantName property
     * @return string|null
    */
    public function getResourceTenantName(): ?string {
        $val = $this->getBackingStore()->get('resourceTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTenantName'");
    }

    /**
     * Gets the resourceTenantPrimaryDomain property value. The resourceTenantPrimaryDomain property
     * @return string|null
    */
    public function getResourceTenantPrimaryDomain(): ?string {
        $val = $this->getBackingStore()->get('resourceTenantPrimaryDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTenantPrimaryDomain'");
    }

    /**
     * Gets the usageStatus property value. The usageStatus property
     * @return UsageStatus|null
    */
    public function getUsageStatus(): ?UsageStatus {
        $val = $this->getBackingStore()->get('usageStatus');
        if (is_null($val) || $val instanceof UsageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageStatus'");
    }

    /**
     * Gets the userCount property value. The userCount property
     * @return int|null
    */
    public function getUserCount(): ?int {
        $val = $this->getBackingStore()->get('userCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeDateTimeValue('lastAccessDateTime', $this->getLastAccessDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceTenantId', $this->getResourceTenantId());
        $writer->writeStringValue('resourceTenantName', $this->getResourceTenantName());
        $writer->writeStringValue('resourceTenantPrimaryDomain', $this->getResourceTenantPrimaryDomain());
        $writer->writeEnumValue('usageStatus', $this->getUsageStatus());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
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
     * Sets the deviceCount property value. The deviceCount property
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the lastAccessDateTime property value. The lastAccessDateTime property
     * @param DateTime|null $value Value to set for the lastAccessDateTime property.
    */
    public function setLastAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAccessDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceTenantId property value. The resourceTenantId property
     * @param string|null $value Value to set for the resourceTenantId property.
    */
    public function setResourceTenantId(?string $value): void {
        $this->getBackingStore()->set('resourceTenantId', $value);
    }

    /**
     * Sets the resourceTenantName property value. The resourceTenantName property
     * @param string|null $value Value to set for the resourceTenantName property.
    */
    public function setResourceTenantName(?string $value): void {
        $this->getBackingStore()->set('resourceTenantName', $value);
    }

    /**
     * Sets the resourceTenantPrimaryDomain property value. The resourceTenantPrimaryDomain property
     * @param string|null $value Value to set for the resourceTenantPrimaryDomain property.
    */
    public function setResourceTenantPrimaryDomain(?string $value): void {
        $this->getBackingStore()->set('resourceTenantPrimaryDomain', $value);
    }

    /**
     * Sets the usageStatus property value. The usageStatus property
     * @param UsageStatus|null $value Value to set for the usageStatus property.
    */
    public function setUsageStatus(?UsageStatus $value): void {
        $this->getBackingStore()->set('usageStatus', $value);
    }

    /**
     * Sets the userCount property value. The userCount property
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

}
