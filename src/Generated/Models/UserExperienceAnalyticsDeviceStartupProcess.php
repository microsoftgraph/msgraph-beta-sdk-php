<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceStartupProcess extends Entity 
{
    /** @var string|null $managedDeviceId The user experience analytics device id. */
    private ?string $managedDeviceId = null;
    
    /** @var string|null $processName User experience analytics device startup process name. */
    private ?string $processName = null;
    
    /** @var string|null $productName The user experience analytics device startup process product name. */
    private ?string $productName = null;
    
    /** @var string|null $publisher The User experience analytics device startup process publisher. */
    private ?string $publisher = null;
    
    /** @var int|null $startupImpactInMs User experience analytics device startup process impact in milliseconds. */
    private ?int $startupImpactInMs = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsDeviceStartupProcess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupProcess {
        return new UserExperienceAnalyticsDeviceStartupProcess();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'managedDeviceId' => function (self $o, ParseNode $n) { $o->setManagedDeviceId($n->getStringValue()); },
            'processName' => function (self $o, ParseNode $n) { $o->setProcessName($n->getStringValue()); },
            'productName' => function (self $o, ParseNode $n) { $o->setProductName($n->getStringValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
            'startupImpactInMs' => function (self $o, ParseNode $n) { $o->setStartupImpactInMs($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceId property value. The user experience analytics device id.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
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
     * Gets the startupImpactInMs property value. User experience analytics device startup process impact in milliseconds.
     * @return int|null
    */
    public function getStartupImpactInMs(): ?int {
        return $this->startupImpactInMs;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('processName', $this->processName);
        $writer->writeStringValue('productName', $this->productName);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeIntegerValue('startupImpactInMs', $this->startupImpactInMs);
    }

    /**
     * Sets the managedDeviceId property value. The user experience analytics device id.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
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
     * Sets the startupImpactInMs property value. User experience analytics device startup process impact in milliseconds.
     *  @param int|null $value Value to set for the startupImpactInMs property.
    */
    public function setStartupImpactInMs(?int $value ): void {
        $this->startupImpactInMs = $value;
    }

}
