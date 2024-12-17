<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CallSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallSettings {
        return new CallSettings();
    }

    /**
     * Gets the delegates property value. The delegates property
     * @return array<DelegationSettings>|null
    */
    public function getDelegates(): ?array {
        $val = $this->getBackingStore()->get('delegates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegationSettings::class);
            /** @var array<DelegationSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegates'");
    }

    /**
     * Gets the delegators property value. The delegators property
     * @return array<DelegationSettings>|null
    */
    public function getDelegators(): ?array {
        $val = $this->getBackingStore()->get('delegators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegationSettings::class);
            /** @var array<DelegationSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegators'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'delegates' => fn(ParseNode $n) => $o->setDelegates($n->getCollectionOfObjectValues([DelegationSettings::class, 'createFromDiscriminatorValue'])),
            'delegators' => fn(ParseNode $n) => $o->setDelegators($n->getCollectionOfObjectValues([DelegationSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('delegates', $this->getDelegates());
        $writer->writeCollectionOfObjectValues('delegators', $this->getDelegators());
    }

    /**
     * Sets the delegates property value. The delegates property
     * @param array<DelegationSettings>|null $value Value to set for the delegates property.
    */
    public function setDelegates(?array $value): void {
        $this->getBackingStore()->set('delegates', $value);
    }

    /**
     * Sets the delegators property value. The delegators property
     * @param array<DelegationSettings>|null $value Value to set for the delegators property.
    */
    public function setDelegators(?array $value): void {
        $this->getBackingStore()->set('delegators', $value);
    }

}
