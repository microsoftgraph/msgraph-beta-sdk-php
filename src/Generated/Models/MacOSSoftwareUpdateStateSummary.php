<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new macOSSoftwareUpdateStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('displayName');
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
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the productKey property value. Product key of the software update.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->getBackingStore()->get('productKey');
    }

    /**
     * Gets the state property value. MacOS Software Update State
     * @return MacOSSoftwareUpdateState|null
    */
    public function getState(): ?MacOSSoftwareUpdateState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the updateCategory property value. MacOS Software Update Category
     * @return MacOSSoftwareUpdateCategory|null
    */
    public function getUpdateCategory(): ?MacOSSoftwareUpdateCategory {
        return $this->getBackingStore()->get('updateCategory');
    }

    /**
     * Gets the updateVersion property value. Version of the software update
     * @return string|null
    */
    public function getUpdateVersion(): ?string {
        return $this->getBackingStore()->get('updateVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeEnumValue('updateCategory', $this->getUpdateCategory());
        $writer->writeStringValue('updateVersion', $this->getUpdateVersion());
    }

    /**
     * Sets the displayName property value. Human readable name of the software update
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last date time the report for this device and product key was updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the productKey property value. Product key of the software update.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the state property value. MacOS Software Update State
     *  @param MacOSSoftwareUpdateState|null $value Value to set for the state property.
    */
    public function setState(?MacOSSoftwareUpdateState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the updateCategory property value. MacOS Software Update Category
     *  @param MacOSSoftwareUpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?MacOSSoftwareUpdateCategory $value): void {
        $this->getBackingStore()->set('updateCategory', $value);
    }

    /**
     * Sets the updateVersion property value. Version of the software update
     *  @param string|null $value Value to set for the updateVersion property.
    */
    public function setUpdateVersion(?string $value): void {
        $this->getBackingStore()->set('updateVersion', $value);
    }

}
