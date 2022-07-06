<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AllowedDataLocation extends Entity implements Parsable 
{
    /**
     * @var string|null $appId The appId property
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $domain The domain property
    */
    private ?string $domain = null;
    
    /**
     * @var bool|null $isDefault The isDefault property
    */
    private ?bool $isDefault = null;
    
    /**
     * @var string|null $location The location property
    */
    private ?string $location = null;
    
    /**
     * Instantiates a new AllowedDataLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AllowedDataLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AllowedDataLocation {
        return new AllowedDataLocation();
    }

    /**
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the domain property value. The domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'domain' => function (ParseNode $n) use ($o) { $o->setDomain($n->getStringValue()); },
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the location property value. The location property
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('domain', $this->domain);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeStringValue('location', $this->location);
    }

    /**
     * Sets the appId property value. The appId property
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the domain property value. The domain property
     *  @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value ): void {
        $this->domain = $value;
    }

    /**
     * Sets the isDefault property value. The isDefault property
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the location property value. The location property
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value ): void {
        $this->location = $value;
    }

}
