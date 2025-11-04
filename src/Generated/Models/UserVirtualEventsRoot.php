<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserVirtualEventsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserVirtualEventsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserVirtualEventsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserVirtualEventsRoot {
        return new UserVirtualEventsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'webinars' => fn(ParseNode $n) => $o->setWebinars($n->getCollectionOfObjectValues([VirtualEventWebinar::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the webinars property value. The webinars property
     * @return array<VirtualEventWebinar>|null
    */
    public function getWebinars(): ?array {
        $val = $this->getBackingStore()->get('webinars');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventWebinar::class);
            /** @var array<VirtualEventWebinar>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webinars'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('webinars', $this->getWebinars());
    }

    /**
     * Sets the webinars property value. The webinars property
     * @param array<VirtualEventWebinar>|null $value Value to set for the webinars property.
    */
    public function setWebinars(?array $value): void {
        $this->getBackingStore()->set('webinars', $value);
    }

}
