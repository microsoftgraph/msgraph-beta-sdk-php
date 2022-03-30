<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceStartupProcessPerformance extends Entity 
{
    /** @var int|null $deviceCount User experience analytics device startup process summarized count. */
    private ?int $deviceCount = null;
    
    /** @var int|null $medianImpactInMs User experience analytics device startup process median impact in milliseconds. */
    private ?int $medianImpactInMs = null;
    
    /** @var int|null $medianImpactInMs2 User experience analytics device startup process median impact in milliseconds. */
    private ?int $medianImpactInMs2 = null;
    
    /** @var string|null $processName User experience analytics device startup process name. */
    private ?string $processName = null;
    
    /** @var string|null $productName The user experience analytics device startup process product name. */
    private ?string $productName = null;
    
    /** @var string|null $publisher The User experience analytics device startup process publisher. */
    private ?string $publisher = null;
    
    /** @var int|null $totalImpactInMs User experience analytics device startup process total impact in milliseconds. */
    private ?int $totalImpactInMs = null;
    
    /** @var int|null $totalImpactInMs2 User experience analytics device startup process total impact in milliseconds. */
    private ?int $totalImpactInMs2 = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupProcessPerformance {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformance();
    }

    /**
     * Gets the deviceCount property value. User experience analytics device startup process summarized count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => function (self $o, ParseNode $n) { $o->setDeviceCount($n->getIntegerValue()); },
            'medianImpactInMs' => function (self $o, ParseNode $n) { $o->setMedianImpactInMs($n->getIntegerValue()); },
            'medianImpactInMs2' => function (self $o, ParseNode $n) { $o->setMedianImpactInMs2($n->getIntegerValue()); },
            'processName' => function (self $o, ParseNode $n) { $o->setProcessName($n->getStringValue()); },
            'productName' => function (self $o, ParseNode $n) { $o->setProductName($n->getStringValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
            'totalImpactInMs' => function (self $o, ParseNode $n) { $o->setTotalImpactInMs($n->getIntegerValue()); },
            'totalImpactInMs2' => function (self $o, ParseNode $n) { $o->setTotalImpactInMs2($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the medianImpactInMs property value. User experience analytics device startup process median impact in milliseconds.
     * @return int|null
    */
    public function getMedianImpactInMs(): ?int {
        return $this->medianImpactInMs;
    }

    /**
     * Gets the medianImpactInMs2 property value. User experience analytics device startup process median impact in milliseconds.
     * @return int|null
    */
    public function getMedianImpactInMs2(): ?int {
        return $this->medianImpactInMs2;
    }

    /**
     * Gets the processName property value. User experience analytics device startup process name.
     * @return string|null
    */
    public function getProcessName(): ?string {
        return $this->processName;
    }

    /**
     * Gets the productName property value. The user experience analytics device startup process product name.
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->productName;
    }

    /**
     * Gets the publisher property value. The User experience analytics device startup process publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the totalImpactInMs property value. User experience analytics device startup process total impact in milliseconds.
     * @return int|null
    */
    public function getTotalImpactInMs(): ?int {
        return $this->totalImpactInMs;
    }

    /**
     * Gets the totalImpactInMs2 property value. User experience analytics device startup process total impact in milliseconds.
     * @return int|null
    */
    public function getTotalImpactInMs2(): ?int {
        return $this->totalImpactInMs2;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeIntegerValue('medianImpactInMs', $this->medianImpactInMs);
        $writer->writeIntegerValue('medianImpactInMs2', $this->medianImpactInMs2);
        $writer->writeStringValue('processName', $this->processName);
        $writer->writeStringValue('productName', $this->productName);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeIntegerValue('totalImpactInMs', $this->totalImpactInMs);
        $writer->writeIntegerValue('totalImpactInMs2', $this->totalImpactInMs2);
    }

    /**
     * Sets the deviceCount property value. User experience analytics device startup process summarized count.
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the medianImpactInMs property value. User experience analytics device startup process median impact in milliseconds.
     *  @param int|null $value Value to set for the medianImpactInMs property.
    */
    public function setMedianImpactInMs(?int $value ): void {
        $this->medianImpactInMs = $value;
    }

    /**
     * Sets the medianImpactInMs2 property value. User experience analytics device startup process median impact in milliseconds.
     *  @param int|null $value Value to set for the medianImpactInMs2 property.
    */
    public function setMedianImpactInMs2(?int $value ): void {
        $this->medianImpactInMs2 = $value;
    }

    /**
     * Sets the processName property value. User experience analytics device startup process name.
     *  @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value ): void {
        $this->processName = $value;
    }

    /**
     * Sets the productName property value. The user experience analytics device startup process product name.
     *  @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value ): void {
        $this->productName = $value;
    }

    /**
     * Sets the publisher property value. The User experience analytics device startup process publisher.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the totalImpactInMs property value. User experience analytics device startup process total impact in milliseconds.
     *  @param int|null $value Value to set for the totalImpactInMs property.
    */
    public function setTotalImpactInMs(?int $value ): void {
        $this->totalImpactInMs = $value;
    }

    /**
     * Sets the totalImpactInMs2 property value. User experience analytics device startup process total impact in milliseconds.
     *  @param int|null $value Value to set for the totalImpactInMs2 property.
    */
    public function setTotalImpactInMs2(?int $value ): void {
        $this->totalImpactInMs2 = $value;
    }

}
