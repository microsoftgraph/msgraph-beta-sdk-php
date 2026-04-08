<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * User's storyline singleton container.
*/
class Storyline extends Entity implements Parsable 
{
    /**
     * Instantiates a new Storyline and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Storyline
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Storyline {
        return new Storyline();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'followers' => fn(ParseNode $n) => $o->setFollowers($n->getCollectionOfObjectValues([StorylineFollower::class, 'createFromDiscriminatorValue'])),
            'followings' => fn(ParseNode $n) => $o->setFollowings($n->getCollectionOfObjectValues([StorylineFollowing::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the followers property value. The users who are following this user.
     * @return array<StorylineFollower>|null
    */
    public function getFollowers(): ?array {
        $val = $this->getBackingStore()->get('followers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StorylineFollower::class);
            /** @var array<StorylineFollower>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'followers'");
    }

    /**
     * Gets the followings property value. The users that this user is following.
     * @return array<StorylineFollowing>|null
    */
    public function getFollowings(): ?array {
        $val = $this->getBackingStore()->get('followings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StorylineFollowing::class);
            /** @var array<StorylineFollowing>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'followings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('followers', $this->getFollowers());
        $writer->writeCollectionOfObjectValues('followings', $this->getFollowings());
    }

    /**
     * Sets the followers property value. The users who are following this user.
     * @param array<StorylineFollower>|null $value Value to set for the followers property.
    */
    public function setFollowers(?array $value): void {
        $this->getBackingStore()->set('followers', $value);
    }

    /**
     * Sets the followings property value. The users that this user is following.
     * @param array<StorylineFollowing>|null $value Value to set for the followings property.
    */
    public function setFollowings(?array $value): void {
        $this->getBackingStore()->set('followings', $value);
    }

}
