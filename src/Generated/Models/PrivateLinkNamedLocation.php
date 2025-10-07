<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrivateLinkNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * Instantiates a new PrivateLinkNamedLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privateLinkNamedLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivateLinkNamedLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivateLinkNamedLocation {
        return new PrivateLinkNamedLocation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isTrusted' => fn(ParseNode $n) => $o->setIsTrusted($n->getBooleanValue()),
            'privateLinkResourcePolicyIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPrivateLinkResourcePolicyIds($val);
            },
        ]);
    }

    /**
     * Gets the isTrusted property value. The isTrusted property
     * @return bool|null
    */
    public function getIsTrusted(): ?bool {
        $val = $this->getBackingStore()->get('isTrusted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTrusted'");
    }

    /**
     * Gets the privateLinkResourcePolicyIds property value. The privateLinkResourcePolicyIds property
     * @return array<string>|null
    */
    public function getPrivateLinkResourcePolicyIds(): ?array {
        $val = $this->getBackingStore()->get('privateLinkResourcePolicyIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateLinkResourcePolicyIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isTrusted', $this->getIsTrusted());
        $writer->writeCollectionOfPrimitiveValues('privateLinkResourcePolicyIds', $this->getPrivateLinkResourcePolicyIds());
    }

    /**
     * Sets the isTrusted property value. The isTrusted property
     * @param bool|null $value Value to set for the isTrusted property.
    */
    public function setIsTrusted(?bool $value): void {
        $this->getBackingStore()->set('isTrusted', $value);
    }

    /**
     * Sets the privateLinkResourcePolicyIds property value. The privateLinkResourcePolicyIds property
     * @param array<string>|null $value Value to set for the privateLinkResourcePolicyIds property.
    */
    public function setPrivateLinkResourcePolicyIds(?array $value): void {
        $this->getBackingStore()->set('privateLinkResourcePolicyIds', $value);
    }

}
