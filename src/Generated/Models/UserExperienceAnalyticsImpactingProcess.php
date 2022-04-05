<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsImpactingProcess extends Entity 
{
    /** @var string|null $category The category of impacting process. */
    private ?string $category = null;
    
    /** @var string|null $description The description of process. */
    private ?string $description = null;
    
    /** @var string|null $deviceId The unique identifier of the impacted device. */
    private ?string $deviceId = null;
    
    /** @var float|null $impactValue The impact value of the process. Valid values 0 to 1.79769313486232E+308 */
    private ?float $impactValue = null;
    
    /** @var string|null $processName The process name. */
    private ?string $processName = null;
    
    /** @var string|null $publisher The publisher of the process. */
    private ?string $publisher = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsImpactingProcess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsImpactingProcess
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsImpactingProcess {
        return new UserExperienceAnalyticsImpactingProcess();
    }

    /**
     * Gets the category property value. The category of impacting process.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the description property value. The description of process.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceId property value. The unique identifier of the impacted device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'impactValue' => function (self $o, ParseNode $n) { $o->setImpactValue($n->getFloatValue()); },
            'processName' => function (self $o, ParseNode $n) { $o->setProcessName($n->getStringValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the impactValue property value. The impact value of the process. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getImpactValue(): ?float {
        return $this->impactValue;
    }

    /**
     * Gets the processName property value. The process name.
     * @return string|null
    */
    public function getProcessName(): ?string {
        return $this->processName;
    }

    /**
     * Gets the publisher property value. The publisher of the process.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('category', $this->category);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeFloatValue('impactValue', $this->impactValue);
        $writer->writeStringValue('processName', $this->processName);
        $writer->writeStringValue('publisher', $this->publisher);
    }

    /**
     * Sets the category property value. The category of impacting process.
     *  @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the description property value. The description of process.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceId property value. The unique identifier of the impacted device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the impactValue property value. The impact value of the process. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the impactValue property.
    */
    public function setImpactValue(?float $value ): void {
        $this->impactValue = $value;
    }

    /**
     * Sets the processName property value. The process name.
     *  @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value ): void {
        $this->processName = $value;
    }

    /**
     * Sets the publisher property value. The publisher of the process.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

}
