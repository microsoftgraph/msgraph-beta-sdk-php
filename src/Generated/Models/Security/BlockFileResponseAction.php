<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BlockFileResponseAction extends ResponseAction implements Parsable 
{
    /**
     * Instantiates a new BlockFileResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.blockFileResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlockFileResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlockFileResponseAction {
        return new BlockFileResponseAction();
    }

    /**
     * Gets the deviceGroupNames property value. Device groups to which the actions set in the custom detection rule are applied. More information
     * @return array<string>|null
    */
    public function getDeviceGroupNames(): ?array {
        $val = $this->getBackingStore()->get('deviceGroupNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGroupNames'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceGroupNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDeviceGroupNames($val);
            },
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getEnumValue(FileEntityIdentifier::class)),
        ]);
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return FileEntityIdentifier|null
    */
    public function getIdentifier(): ?FileEntityIdentifier {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || $val instanceof FileEntityIdentifier) {
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
        $writer->writeCollectionOfPrimitiveValues('deviceGroupNames', $this->getDeviceGroupNames());
        $writer->writeEnumValue('identifier', $this->getIdentifier());
    }

    /**
     * Sets the deviceGroupNames property value. Device groups to which the actions set in the custom detection rule are applied. More information
     * @param array<string>|null $value Value to set for the deviceGroupNames property.
    */
    public function setDeviceGroupNames(?array $value): void {
        $this->getBackingStore()->set('deviceGroupNames', $value);
    }

    /**
     * Sets the identifier property value. The identifier property
     * @param FileEntityIdentifier|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?FileEntityIdentifier $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

}
