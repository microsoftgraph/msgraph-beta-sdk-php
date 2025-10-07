<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExactMatchDataStore extends ExactMatchDataStoreBase implements Parsable 
{
    /**
     * Instantiates a new ExactMatchDataStore and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchDataStore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchDataStore {
        return new ExactMatchDataStore();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([ExactMatchSession::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sessions property value. The sessions property
     * @return array<ExactMatchSession>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExactMatchSession::class);
            /** @var array<ExactMatchSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
    }

    /**
     * Sets the sessions property value. The sessions property
     * @param array<ExactMatchSession>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

}
