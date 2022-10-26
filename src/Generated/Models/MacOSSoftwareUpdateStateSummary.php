<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateStateSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName Human readable name of the software update
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Last date time the report for this device and product key was updated.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $productKey Product key of the software update.
    */
    private ?string $productKey = null;
    
    /**
     * @var MacOSSoftwareUpdateState|null $state MacOS Software Update State
    */
    private ?MacOSSoftwareUpdateState $state = null;
    
    /**
     * @var MacOSSoftwareUpdateCategory|null $updateCategory MacOS Software Update Category
    */
    private ?MacOSSoftwareUpdateCategory $updateCategory = null;
    
    /**
     * @var string|null $updateVersion Version of the software update
    */
    private ?string $updateVersion = null;
    
    /**
     * Instantiates a new macOSSoftwareUpdateStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSSoftwareUpdateStateSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSoftwareUpdateStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSoftwareUpdateStateSummary {
        return new MacOSSoftwareUpdateStateSummary();
    }

    /**
     * Gets the displayName property value. Human readable name of the software update
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MacOSSoftwareUpdateState::class)),
            'updateCategory' => fn(ParseNode $n) => $o->setUpdateCategory($n->getEnumValue(MacOSSoftwareUpdateCategory::class)),
            'updateVersion' => fn(ParseNode $n) => $o->setUpdateVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. Last date time the report for this device and product key was updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the productKey property value. Product key of the software update.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the state property value. MacOS Software Update State
     * @return MacOSSoftwareUpdateState|null
    */
    public function getState(): ?MacOSSoftwareUpdateState {
        return $this->state;
    }

    /**
     * Gets the updateCategory property value. MacOS Software Update Category
     * @return MacOSSoftwareUpdateCategory|null
    */
    public function getUpdateCategory(): ?MacOSSoftwareUpdateCategory {
        return $this->updateCategory;
    }

    /**
     * Gets the updateVersion property value. Version of the software update
     * @return string|null
    */
    public function getUpdateVersion(): ?string {
        return $this->updateVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeEnumValue('updateCategory', $this->updateCategory);
        $writer->writeStringValue('updateVersion', $this->updateVersion);
    }

    /**
     * Sets the displayName property value. Human readable name of the software update
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last date time the report for this device and product key was updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the productKey property value. Product key of the software update.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the state property value. MacOS Software Update State
     *  @param MacOSSoftwareUpdateState|null $value Value to set for the state property.
    */
    public function setState(?MacOSSoftwareUpdateState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the updateCategory property value. MacOS Software Update Category
     *  @param MacOSSoftwareUpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?MacOSSoftwareUpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

    /**
     * Sets the updateVersion property value. Version of the software update
     *  @param string|null $value Value to set for the updateVersion property.
    */
    public function setUpdateVersion(?string $value ): void {
        $this->updateVersion = $value;
    }

}
