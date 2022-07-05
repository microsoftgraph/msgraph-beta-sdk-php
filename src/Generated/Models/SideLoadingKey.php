<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SideLoadingKey extends Entity implements Parsable 
{
    /**
     * @var string|null $description Side Loading Key description displayed to the ITPro Admins..
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Side Loading Key Name displayed to the ITPro Admins.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $lastUpdatedDateTime Side Loading Key Last Updated Date displayed to the ITPro Admins.
    */
    private ?string $lastUpdatedDateTime = null;
    
    /**
     * @var int|null $totalActivation Side Loading Key Total Activation displayed to the ITPro Admins.
    */
    private ?int $totalActivation = null;
    
    /**
     * @var string|null $value Side Loading Key Value, it is 5x5 value, seperated by hiphens.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new sideLoadingKey and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SideLoadingKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SideLoadingKey {
        return new SideLoadingKey();
    }

    /**
     * Gets the description property value. Side Loading Key description displayed to the ITPro Admins..
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Side Loading Key Name displayed to the ITPro Admins.
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
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getStringValue()); },
            'totalActivation' => function (ParseNode $n) use ($o) { $o->setTotalActivation($n->getIntegerValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. Side Loading Key Last Updated Date displayed to the ITPro Admins.
     * @return string|null
    */
    public function getLastUpdatedDateTime(): ?string {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the totalActivation property value. Side Loading Key Total Activation displayed to the ITPro Admins.
     * @return int|null
    */
    public function getTotalActivation(): ?int {
        return $this->totalActivation;
    }

    /**
     * Gets the value property value. Side Loading Key Value, it is 5x5 value, seperated by hiphens.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeIntegerValue('totalActivation', $this->totalActivation);
        $writer->writeStringValue('value', $this->value);
    }

    /**
     * Sets the description property value. Side Loading Key description displayed to the ITPro Admins..
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Side Loading Key Name displayed to the ITPro Admins.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Side Loading Key Last Updated Date displayed to the ITPro Admins.
     *  @param string|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?string $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the totalActivation property value. Side Loading Key Total Activation displayed to the ITPro Admins.
     *  @param int|null $value Value to set for the totalActivation property.
    */
    public function setTotalActivation(?int $value ): void {
        $this->totalActivation = $value;
    }

    /**
     * Sets the value property value. Side Loading Key Value, it is 5x5 value, seperated by hiphens.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
