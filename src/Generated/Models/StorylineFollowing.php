<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Engagement storyline following.
*/
class StorylineFollowing extends Entity implements Parsable 
{
    /**
     * Instantiates a new StorylineFollowing and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorylineFollowing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorylineFollowing {
        return new StorylineFollowing();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'following' => fn(ParseNode $n) => $o->setFollowing($n->getObjectValue([EngagementIdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the following property value. The following property
     * @return EngagementIdentitySet|null
    */
    public function getFollowing(): ?EngagementIdentitySet {
        $val = $this->getBackingStore()->get('following');
        if (is_null($val) || $val instanceof EngagementIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'following'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('following', $this->getFollowing());
    }

    /**
     * Sets the following property value. The following property
     * @param EngagementIdentitySet|null $value Value to set for the following property.
    */
    public function setFollowing(?EngagementIdentitySet $value): void {
        $this->getBackingStore()->set('following', $value);
    }

}
