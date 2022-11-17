<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateAccountSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new macOSSoftwareUpdateAccountSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSSoftwareUpdateAccountSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSoftwareUpdateAccountSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSoftwareUpdateAccountSummary {
        return new MacOSSoftwareUpdateAccountSummary();
    }

    /**
     * Gets the categorySummaries property value. Summary of the updates by category.
     * @return array<MacOSSoftwareUpdateCategorySummary>|null
    */
    public function getCategorySummaries(): ?array {
        return $this->getBackingStore()->get('categorySummaries');
    }

    /**
     * Gets the deviceId property value. The device ID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. The device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the displayName property value. The name of the report
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the failedUpdateCount property value. Number of failed updates on the device.
     * @return int|null
    */
    public function getFailedUpdateCount(): ?int {
        return $this->getBackingStore()->get('failedUpdateCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categorySummaries' => fn(ParseNode $n) => $o->setCategorySummaries($n->getCollectionOfObjectValues([MacOSSoftwareUpdateCategorySummary::class, 'createFromDiscriminatorValue'])),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'failedUpdateCount' => fn(ParseNode $n) => $o->setFailedUpdateCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'successfulUpdateCount' => fn(ParseNode $n) => $o->setSuccessfulUpdateCount($n->getIntegerValue()),
            'totalUpdateCount' => fn(ParseNode $n) => $o->setTotalUpdateCount($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. Last date time the report for this device was updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the osVersion property value. The OS version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the successfulUpdateCount property value. Number of successful updates on the device.
     * @return int|null
    */
    public function getSuccessfulUpdateCount(): ?int {
        return $this->getBackingStore()->get('successfulUpdateCount');
    }

    /**
     * Gets the totalUpdateCount property value. Number of total updates on the device.
     * @return int|null
    */
    public function getTotalUpdateCount(): ?int {
        return $this->getBackingStore()->get('totalUpdateCount');
    }

    /**
     * Gets the userId property value. The user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('categorySummaries', $this->getCategorySummaries());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('failedUpdateCount', $this->getFailedUpdateCount());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeIntegerValue('successfulUpdateCount', $this->getSuccessfulUpdateCount());
        $writer->writeIntegerValue('totalUpdateCount', $this->getTotalUpdateCount());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the categorySummaries property value. Summary of the updates by category.
     *  @param array<MacOSSoftwareUpdateCategorySummary>|null $value Value to set for the categorySummaries property.
    */
    public function setCategorySummaries(?array $value): void {
        $this->getBackingStore()->set('categorySummaries', $value);
    }

    /**
     * Sets the deviceId property value. The device ID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the displayName property value. The name of the report
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the failedUpdateCount property value. Number of failed updates on the device.
     *  @param int|null $value Value to set for the failedUpdateCount property.
    */
    public function setFailedUpdateCount(?int $value): void {
        $this->getBackingStore()->set('failedUpdateCount', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last date time the report for this device was updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the osVersion property value. The OS version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the successfulUpdateCount property value. Number of successful updates on the device.
     *  @param int|null $value Value to set for the successfulUpdateCount property.
    */
    public function setSuccessfulUpdateCount(?int $value): void {
        $this->getBackingStore()->set('successfulUpdateCount', $value);
    }

    /**
     * Sets the totalUpdateCount property value. Number of total updates on the device.
     *  @param int|null $value Value to set for the totalUpdateCount property.
    */
    public function setTotalUpdateCount(?int $value): void {
        $this->getBackingStore()->set('totalUpdateCount', $value);
    }

    /**
     * Sets the userId property value. The user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
