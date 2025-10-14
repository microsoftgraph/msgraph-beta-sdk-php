<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedRbacApplicationMultiple extends RbacApplicationMultiple implements Parsable 
{
    /**
     * Instantiates a new UnifiedRbacApplicationMultiple and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRbacApplicationMultiple');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacApplicationMultiple
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacApplicationMultiple {
        return new UnifiedRbacApplicationMultiple();
    }

    /**
     * Gets the customAppScopes property value. Represents the resources that the principal has been granted access.
     * @return array<CustomAppScope>|null
    */
    public function getCustomAppScopes(): ?array {
        $val = $this->getBackingStore()->get('customAppScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomAppScope::class);
            /** @var array<CustomAppScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAppScopes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customAppScopes' => fn(ParseNode $n) => $o->setCustomAppScopes($n->getCollectionOfObjectValues([CustomAppScope::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customAppScopes', $this->getCustomAppScopes());
    }

    /**
     * Sets the customAppScopes property value. Represents the resources that the principal has been granted access.
     * @param array<CustomAppScope>|null $value Value to set for the customAppScopes property.
    */
    public function setCustomAppScopes(?array $value): void {
        $this->getBackingStore()->set('customAppScopes', $value);
    }

}
