<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageDynamicApprovalStage extends ApprovalStage implements Parsable 
{
    /**
     * Instantiates a new AccessPackageDynamicApprovalStage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageDynamicApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageDynamicApprovalStage {
        return new AccessPackageDynamicApprovalStage();
    }

    /**
     * Gets the customExtension property value. The customExtension property
     * @return CustomCalloutExtension|null
    */
    public function getCustomExtension(): ?CustomCalloutExtension {
        $val = $this->getBackingStore()->get('customExtension');
        if (is_null($val) || $val instanceof CustomCalloutExtension) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtension'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customExtension' => fn(ParseNode $n) => $o->setCustomExtension($n->getObjectValue([CustomCalloutExtension::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customExtension', $this->getCustomExtension());
    }

    /**
     * Sets the customExtension property value. The customExtension property
     * @param CustomCalloutExtension|null $value Value to set for the customExtension property.
    */
    public function setCustomExtension(?CustomCalloutExtension $value): void {
        $this->getBackingStore()->set('customExtension', $value);
    }

}
