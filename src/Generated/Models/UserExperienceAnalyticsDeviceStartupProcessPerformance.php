<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceStartupProcessPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsDeviceStartupProcessPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupProcessPerformance {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformance();
    }

    /**
     * Gets the deviceCount property value. User experience analytics device startup process summarized count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->getBackingStore()->get('deviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'medianImpactInMs' => fn(ParseNode $n) => $o->setMedianImpactInMs($n->getIntegerValue()),
            'medianImpactInMs2' => fn(ParseNode $n) => $o->setMedianImpactInMs2($n->getIntegerValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'totalImpactInMs' => fn(ParseNode $n) => $o->setTotalImpactInMs($n->getIntegerValue()),
            'totalImpactInMs2' => fn(ParseNode $n) => $o->setTotalImpactInMs2($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the medianImpactInMs property value. User experience analytics device startup process median impact in milliseconds.
     * @return int|null
    */
    public function getMedianImpactInMs(): ?int {
        return $this->getBackingStore()->get('medianImpactInMs');
    }

    /**
     * Gets the medianImpactInMs2 property value. User experience analytics device startup process median impact in milliseconds.
     * @return int|null
    */
    public function getMedianImpactInMs2(): ?int {
        return $this->getBackingStore()->get('medianImpactInMs2');
    }

    /**
     * Gets the processName property value. User experience analytics device startup process name.
     * @return string|null
    */
    public function getProcessName(): ?string {
        return $this->getBackingStore()->get('processName');
    }

    /**
     * Gets the productName property value. The user experience analytics device startup process product name.
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->getBackingStore()->get('productName');
    }

    /**
     * Gets the publisher property value. The User experience analytics device startup process publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->getBackingStore()->get('publisher');
    }

    /**
     * Gets the totalImpactInMs property value. User experience analytics device startup process total impact in milliseconds.
     * @return int|null
    */
    public function getTotalImpactInMs(): ?int {
        return $this->getBackingStore()->get('totalImpactInMs');
    }

    /**
     * Gets the totalImpactInMs2 property value. User experience analytics device startup process total impact in milliseconds.
     * @return int|null
    */
    public function getTotalImpactInMs2(): ?int {
        return $this->getBackingStore()->get('totalImpactInMs2');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeIntegerValue('medianImpactInMs', $this->getMedianImpactInMs());
        $writer->writeIntegerValue('medianImpactInMs2', $this->getMedianImpactInMs2());
        $writer->writeStringValue('processName', $this->getProcessName());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeIntegerValue('totalImpactInMs', $this->getTotalImpactInMs());
        $writer->writeIntegerValue('totalImpactInMs2', $this->getTotalImpactInMs2());
    }

    /**
     * Sets the deviceCount property value. User experience analytics device startup process summarized count.
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the medianImpactInMs property value. User experience analytics device startup process median impact in milliseconds.
     *  @param int|null $value Value to set for the medianImpactInMs property.
    */
    public function setMedianImpactInMs(?int $value): void {
        $this->getBackingStore()->set('medianImpactInMs', $value);
    }

    /**
     * Sets the medianImpactInMs2 property value. User experience analytics device startup process median impact in milliseconds.
     *  @param int|null $value Value to set for the medianImpactInMs2 property.
    */
    public function setMedianImpactInMs2(?int $value): void {
        $this->getBackingStore()->set('medianImpactInMs2', $value);
    }

    /**
     * Sets the processName property value. User experience analytics device startup process name.
     *  @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

    /**
     * Sets the productName property value. The user experience analytics device startup process product name.
     *  @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the publisher property value. The User experience analytics device startup process publisher.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the totalImpactInMs property value. User experience analytics device startup process total impact in milliseconds.
     *  @param int|null $value Value to set for the totalImpactInMs property.
    */
    public function setTotalImpactInMs(?int $value): void {
        $this->getBackingStore()->set('totalImpactInMs', $value);
    }

    /**
     * Sets the totalImpactInMs2 property value. User experience analytics device startup process total impact in milliseconds.
     *  @param int|null $value Value to set for the totalImpactInMs2 property.
    */
    public function setTotalImpactInMs2(?int $value): void {
        $this->getBackingStore()->set('totalImpactInMs2', $value);
    }

}
