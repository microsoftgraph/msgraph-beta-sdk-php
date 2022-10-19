<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateCategorySummary extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceId The device ID.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $displayName The name of the report
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $failedUpdateCount Number of failed updates on the device
    */
    private ?int $failedUpdateCount = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Last date time the report for this device was updated.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var int|null $successfulUpdateCount Number of successful updates on the device
    */
    private ?int $successfulUpdateCount = null;
    
    /**
     * @var int|null $totalUpdateCount Number of total updates on the device
    */
    private ?int $totalUpdateCount = null;
    
    /**
     * @var MacOSSoftwareUpdateCategory|null $updateCategory MacOS Software Update Category
    */
    private ?MacOSSoftwareUpdateCategory $updateCategory = null;
    
    /**
     * @var array<MacOSSoftwareUpdateStateSummary>|null $updateStateSummaries Summary of the update states.
    */
    private ?array $updateStateSummaries = null;
    
    /**
     * @var string|null $userId The user ID.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new macOSSoftwareUpdateCategorySummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSSoftwareUpdateCategorySummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSoftwareUpdateCategorySummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSoftwareUpdateCategorySummary {
        return new MacOSSoftwareUpdateCategorySummary();
    }

    /**
     * Gets the deviceId property value. The device ID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the displayName property value. The name of the report
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the failedUpdateCount property value. Number of failed updates on the device
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
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'failedUpdateCount' => fn(ParseNode $n) => $o->setFailedUpdateCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'successfulUpdateCount' => fn(ParseNode $n) => $o->setSuccessfulUpdateCount($n->getIntegerValue()),
            'totalUpdateCount' => fn(ParseNode $n) => $o->setTotalUpdateCount($n->getIntegerValue()),
            'updateCategory' => fn(ParseNode $n) => $o->setUpdateCategory($n->getEnumValue(MacOSSoftwareUpdateCategory::class)),
            'updateStateSummaries' => fn(ParseNode $n) => $o->setUpdateStateSummaries($n->getCollectionOfObjectValues([MacOSSoftwareUpdateStateSummary::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the successfulUpdateCount property value. Number of successful updates on the device
     * @return int|null
    */
    public function getSuccessfulUpdateCount(): ?int {
        return $this->successfulUpdateCount;
    }

    /**
     * Gets the totalUpdateCount property value. Number of total updates on the device
     * @return int|null
    */
    public function getTotalUpdateCount(): ?int {
        return $this->totalUpdateCount;
    }

    /**
     * Gets the updateCategory property value. MacOS Software Update Category
     * @return MacOSSoftwareUpdateCategory|null
    */
    public function getUpdateCategory(): ?MacOSSoftwareUpdateCategory {
        return $this->updateCategory;
    }

    /**
     * Gets the updateStateSummaries property value. Summary of the update states.
     * @return array<MacOSSoftwareUpdateStateSummary>|null
    */
    public function getUpdateStateSummaries(): ?array {
        return $this->updateStateSummaries;
    }

    /**
     * Gets the userId property value. The user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('failedUpdateCount', $this->failedUpdateCount);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeIntegerValue('successfulUpdateCount', $this->successfulUpdateCount);
        $writer->writeIntegerValue('totalUpdateCount', $this->totalUpdateCount);
        $writer->writeEnumValue('updateCategory', $this->updateCategory);
        $writer->writeCollectionOfObjectValues('updateStateSummaries', $this->updateStateSummaries);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the deviceId property value. The device ID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the displayName property value. The name of the report
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the failedUpdateCount property value. Number of failed updates on the device
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
     * Sets the successfulUpdateCount property value. Number of successful updates on the device
     *  @param int|null $value Value to set for the successfulUpdateCount property.
    */
    public function setSuccessfulUpdateCount(?int $value ): void {
        $this->successfulUpdateCount = $value;
    }

    /**
     * Sets the totalUpdateCount property value. Number of total updates on the device
     *  @param int|null $value Value to set for the totalUpdateCount property.
    */
    public function setTotalUpdateCount(?int $value ): void {
        $this->totalUpdateCount = $value;
    }

    /**
     * Sets the updateCategory property value. MacOS Software Update Category
     *  @param MacOSSoftwareUpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?MacOSSoftwareUpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

    /**
     * Sets the updateStateSummaries property value. Summary of the update states.
     *  @param array<MacOSSoftwareUpdateStateSummary>|null $value Value to set for the updateStateSummaries property.
    */
    public function setUpdateStateSummaries(?array $value ): void {
        $this->updateStateSummaries = $value;
    }

    /**
     * Sets the userId property value. The user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
