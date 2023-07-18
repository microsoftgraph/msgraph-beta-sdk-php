<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomAppScope extends AppScope implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new customAppScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customAppScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomAppScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomAppScope {
        return new CustomAppScope();
    }

    /**
     * Gets the customAttributes property value. The customAttributes property
     * @return CustomAppScopeAttributesDictionary|null
    */
    public function getCustomAttributes(): ?CustomAppScopeAttributesDictionary {
        $val = $this->getBackingStore()->get('customAttributes');
        if (is_null($val) || $val instanceof CustomAppScopeAttributesDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAttributes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customAttributes' => fn(ParseNode $n) => $o->setCustomAttributes($n->getObjectValue([CustomAppScopeAttributesDictionary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customAttributes', $this->getCustomAttributes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the customAttributes property value. The customAttributes property
     * @param CustomAppScopeAttributesDictionary|null $value Value to set for the customAttributes property.
    */
    public function setCustomAttributes(?CustomAppScopeAttributesDictionary $value): void {
        $this->getBackingStore()->set('customAttributes', $value);
    }

}
