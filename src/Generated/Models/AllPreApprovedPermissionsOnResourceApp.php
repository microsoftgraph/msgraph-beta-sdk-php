<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AllPreApprovedPermissionsOnResourceApp extends PreApprovedPermissions implements Parsable 
{
    /**
     * Instantiates a new AllPreApprovedPermissionsOnResourceApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.allPreApprovedPermissionsOnResourceApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AllPreApprovedPermissionsOnResourceApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AllPreApprovedPermissionsOnResourceApp {
        return new AllPreApprovedPermissionsOnResourceApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceApplicationId' => fn(ParseNode $n) => $o->setResourceApplicationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceApplicationId property value. The appId of the resource application (the API). Required.
     * @return string|null
    */
    public function getResourceApplicationId(): ?string {
        $val = $this->getBackingStore()->get('resourceApplicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceApplicationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('resourceApplicationId', $this->getResourceApplicationId());
    }

    /**
     * Sets the resourceApplicationId property value. The appId of the resource application (the API). Required.
     * @param string|null $value Value to set for the resourceApplicationId property.
    */
    public function setResourceApplicationId(?string $value): void {
        $this->getBackingStore()->set('resourceApplicationId', $value);
    }

}
