<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OfficeClientCheckinStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new officeClientCheckinStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeClientCheckinStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeClientCheckinStatus {
        return new OfficeClientCheckinStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appliedPolicies property value. List of policies delivered to the device as last checkin.
     * @return array<string>|null
    */
    public function getAppliedPolicies(): ?array {
        return $this->getBackingStore()->get('appliedPolicies');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the checkinDateTime property value. Last device check-in time in UTC.
     * @return DateTime|null
    */
    public function getCheckinDateTime(): ?DateTime {
        return $this->getBackingStore()->get('checkinDateTime');
    }

    /**
     * Gets the deviceName property value. Device name trying to check-in.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the devicePlatform property value. Device platform trying to check-in.
     * @return string|null
    */
    public function getDevicePlatform(): ?string {
        return $this->getBackingStore()->get('devicePlatform');
    }

    /**
     * Gets the devicePlatformVersion property value. Device platform version trying to check-in.
     * @return string|null
    */
    public function getDevicePlatformVersion(): ?string {
        return $this->getBackingStore()->get('devicePlatformVersion');
    }

    /**
     * Gets the errorMessage property value. Error message if any associated for the last checkin.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->getBackingStore()->get('errorMessage');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliedPolicies' => fn(ParseNode $n) => $o->setAppliedPolicies($n->getCollectionOfPrimitiveValues()),
            'checkinDateTime' => fn(ParseNode $n) => $o->setCheckinDateTime($n->getDateTimeValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'devicePlatform' => fn(ParseNode $n) => $o->setDevicePlatform($n->getStringValue()),
            'devicePlatformVersion' => fn(ParseNode $n) => $o->setDevicePlatformVersion($n->getStringValue()),
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'wasSuccessful' => fn(ParseNode $n) => $o->setWasSuccessful($n->getBooleanValue()),
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
     * Gets the userId property value. User identifier using the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. User principal name using the device.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the wasSuccessful property value. If the last checkin was successful.
     * @return bool|null
    */
    public function getWasSuccessful(): ?bool {
        return $this->getBackingStore()->get('wasSuccessful');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('appliedPolicies', $this->getAppliedPolicies());
        $writer->writeDateTimeValue('checkinDateTime', $this->getCheckinDateTime());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('devicePlatform', $this->getDevicePlatform());
        $writer->writeStringValue('devicePlatformVersion', $this->getDevicePlatformVersion());
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeBooleanValue('wasSuccessful', $this->getWasSuccessful());
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
     * Sets the appliedPolicies property value. List of policies delivered to the device as last checkin.
     * @param array<string>|null $value Value to set for the appliedPolicies property.
    */
    public function setAppliedPolicies(?array $value): void {
        $this->getBackingStore()->set('appliedPolicies', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the checkinDateTime property value. Last device check-in time in UTC.
     * @param DateTime|null $value Value to set for the checkinDateTime property.
    */
    public function setCheckinDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('checkinDateTime', $value);
    }

    /**
     * Sets the deviceName property value. Device name trying to check-in.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the devicePlatform property value. Device platform trying to check-in.
     * @param string|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?string $value): void {
        $this->getBackingStore()->set('devicePlatform', $value);
    }

    /**
     * Sets the devicePlatformVersion property value. Device platform version trying to check-in.
     * @param string|null $value Value to set for the devicePlatformVersion property.
    */
    public function setDevicePlatformVersion(?string $value): void {
        $this->getBackingStore()->set('devicePlatformVersion', $value);
    }

    /**
     * Sets the errorMessage property value. Error message if any associated for the last checkin.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->getBackingStore()->set('errorMessage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userId property value. User identifier using the device.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name using the device.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the wasSuccessful property value. If the last checkin was successful.
     * @param bool|null $value Value to set for the wasSuccessful property.
    */
    public function setWasSuccessful(?bool $value): void {
        $this->getBackingStore()->set('wasSuccessful', $value);
    }

}
