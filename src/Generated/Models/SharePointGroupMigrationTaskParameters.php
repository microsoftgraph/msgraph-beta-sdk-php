<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointGroupMigrationTaskParameters extends SharePointMigrationTaskParameters implements Parsable 
{
    /**
     * Instantiates a new SharePointGroupMigrationTaskParameters and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointGroupMigrationTaskParameters');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointGroupMigrationTaskParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointGroupMigrationTaskParameters {
        return new SharePointGroupMigrationTaskParameters();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sourceGroupIdentity' => fn(ParseNode $n) => $o->setSourceGroupIdentity($n->getObjectValue([GroupIdentity::class, 'createFromDiscriminatorValue'])),
            'targetGroupIdentity' => fn(ParseNode $n) => $o->setTargetGroupIdentity($n->getObjectValue([GroupIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sourceGroupIdentity property value. The identity of the source group in the source tenant, including its mail nickname.
     * @return GroupIdentity|null
    */
    public function getSourceGroupIdentity(): ?GroupIdentity {
        $val = $this->getBackingStore()->get('sourceGroupIdentity');
        if (is_null($val) || $val instanceof GroupIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceGroupIdentity'");
    }

    /**
     * Gets the targetGroupIdentity property value. The identity of the target group in the target tenant, including its mail nickname.
     * @return GroupIdentity|null
    */
    public function getTargetGroupIdentity(): ?GroupIdentity {
        $val = $this->getBackingStore()->get('targetGroupIdentity');
        if (is_null($val) || $val instanceof GroupIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupIdentity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('sourceGroupIdentity', $this->getSourceGroupIdentity());
        $writer->writeObjectValue('targetGroupIdentity', $this->getTargetGroupIdentity());
    }

    /**
     * Sets the sourceGroupIdentity property value. The identity of the source group in the source tenant, including its mail nickname.
     * @param GroupIdentity|null $value Value to set for the sourceGroupIdentity property.
    */
    public function setSourceGroupIdentity(?GroupIdentity $value): void {
        $this->getBackingStore()->set('sourceGroupIdentity', $value);
    }

    /**
     * Sets the targetGroupIdentity property value. The identity of the target group in the target tenant, including its mail nickname.
     * @param GroupIdentity|null $value Value to set for the targetGroupIdentity property.
    */
    public function setTargetGroupIdentity(?GroupIdentity $value): void {
        $this->getBackingStore()->set('targetGroupIdentity', $value);
    }

}
