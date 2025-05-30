<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GlobalSecureAccessFilteringProfileSessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * Instantiates a new GlobalSecureAccessFilteringProfileSessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.globalSecureAccessFilteringProfileSessionControl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GlobalSecureAccessFilteringProfileSessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GlobalSecureAccessFilteringProfileSessionControl {
        return new GlobalSecureAccessFilteringProfileSessionControl();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'profileId' => fn(ParseNode $n) => $o->setProfileId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the profileId property value. Specifies the distinct identifier that is assigned to the security profile or filtering profile.
     * @return string|null
    */
    public function getProfileId(): ?string {
        $val = $this->getBackingStore()->get('profileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('profileId', $this->getProfileId());
    }

    /**
     * Sets the profileId property value. Specifies the distinct identifier that is assigned to the security profile or filtering profile.
     * @param string|null $value Value to set for the profileId property.
    */
    public function setProfileId(?string $value): void {
        $this->getBackingStore()->set('profileId', $value);
    }

}
