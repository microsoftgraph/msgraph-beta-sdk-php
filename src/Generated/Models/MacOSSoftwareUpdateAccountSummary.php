<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateAccountSummary extends Entity implements Parsable 
{
    /**
     * @var array<MacOSSoftwareUpdateCategorySummary>|null $categorySummaries Summary of the updates by category.
    */
    private ?array $categorySummaries = null;
    
    /**
     * @var string|null $deviceId The device ID.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName The device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $displayName The name of the report
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $failedUpdateCount Number of failed updates on the device.
    */
    private ?int $failedUpdateCount = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Last date time the report for this device was updated.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $osVersion The OS version.
    */
    private ?string $osVersion = null;
    
    /**
     * @var int|null $successfulUpdateCount Number of successful updates on the device.
    */
    private ?int $successfulUpdateCount = null;
    
    /**
     * @var int|null $totalUpdateCount Number of total updates on the device.
    */
    private ?int $totalUpdateCount = null;
    
    /**
     * @var string|null $userId The user ID.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateAccountSummary and sets the default values.
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
        return $this->categorySummaries;
    }

    /**
     * Gets the deviceId property value. The device ID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the displayName property value. The name of the report
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the failedUpdateCount property value. Number of failed updates on the device.
     * @return int|null
    */
    public function getFailedUpdateCount(): ?int {
        return $this->failedUpdateCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categorySummaries' => function (ParseNode $n) use ($o) { $o->setCategorySummaries($n->getCollectionOfObjectValues(array(MacOSSoftwareUpdateCategorySummary::class, 'createFromDiscriminatorValue'))); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'failedUpdateCount' => function (ParseNode $n) use ($o) { $o->setFailedUpdateCount($n->getIntegerValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'successfulUpdateCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulUpdateCount($n->getIntegerValue()); },
            'totalUpdateCount' => function (ParseNode $n) use ($o) { $o->setTotalUpdateCount($n->getIntegerValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. Last date time the report for this device was updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the osVersion property value. The OS version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the successfulUpdateCount property value. Number of successful updates on the device.
     * @return int|null
    */
    public function getSuccessfulUpdateCount(): ?int {
        return $this->successfulUpdateCount;
    }

    /**
     * Gets the totalUpdateCount property value. Number of total updates on the device.
     * @return int|null
    */
    public function getTotalUpdateCount(): ?int {
        return $this->totalUpdateCount;
    }

    /**
     * Gets the userId property value. The user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('categorySummaries', $this->categorySummaries);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('failedUpdateCount', $this->failedUpdateCount);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeIntegerValue('successfulUpdateCount', $this->successfulUpdateCount);
        $writer->writeIntegerValue('totalUpdateCount', $this->totalUpdateCount);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the categorySummaries property value. Summary of the updates by category.
     *  @param array<MacOSSoftwareUpdateCategorySummary>|null $value Value to set for the categorySummaries property.
    */
    public function setCategorySummaries(?array $value ): void {
        $this->categorySummaries = $value;
    }

    /**
     * Sets the deviceId property value. The device ID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the displayName property value. The name of the report
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the failedUpdateCount property value. Number of failed updates on the device.
     *  @param int|null $value Value to set for the failedUpdateCount property.
    */
    public function setFailedUpdateCount(?int $value ): void {
        $this->failedUpdateCount = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last date time the report for this device was updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the osVersion property value. The OS version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the successfulUpdateCount property value. Number of successful updates on the device.
     *  @param int|null $value Value to set for the successfulUpdateCount property.
    */
    public function setSuccessfulUpdateCount(?int $value ): void {
        $this->successfulUpdateCount = $value;
    }

    /**
     * Sets the totalUpdateCount property value. Number of total updates on the device.
     *  @param int|null $value Value to set for the totalUpdateCount property.
    */
    public function setTotalUpdateCount(?int $value ): void {
        $this->totalUpdateCount = $value;
    }

    /**
     * Sets the userId property value. The user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
