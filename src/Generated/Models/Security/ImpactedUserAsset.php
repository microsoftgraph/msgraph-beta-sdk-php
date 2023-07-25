<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImpactedUserAsset extends ImpactedAsset implements Parsable 
{
    /**
     * Instantiates a new impactedUserAsset and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.impactedUserAsset');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImpactedUserAsset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImpactedUserAsset {
        return new ImpactedUserAsset();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getEnumValue(UserAssetIdentifier::class)),
        ]);
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return UserAssetIdentifier|null
    */
    public function getIdentifier(): ?UserAssetIdentifier {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || $val instanceof UserAssetIdentifier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('identifier', $this->getIdentifier());
    }

    /**
     * Sets the identifier property value. The identifier property
     * @param UserAssetIdentifier|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?UserAssetIdentifier $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

}
