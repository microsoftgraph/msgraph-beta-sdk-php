<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointUserMigrationTaskParameters extends SharePointMigrationTaskParameters implements Parsable 
{
    /**
     * Instantiates a new SharePointUserMigrationTaskParameters and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointUserMigrationTaskParameters');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointUserMigrationTaskParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointUserMigrationTaskParameters {
        return new SharePointUserMigrationTaskParameters();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sourceUserIdentity' => fn(ParseNode $n) => $o->setSourceUserIdentity($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'targetUserIdentity' => fn(ParseNode $n) => $o->setTargetUserIdentity($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sourceUserIdentity property value. The sourceUserIdentity property
     * @return UserIdentity|null
    */
    public function getSourceUserIdentity(): ?UserIdentity {
        $val = $this->getBackingStore()->get('sourceUserIdentity');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceUserIdentity'");
    }

    /**
     * Gets the targetUserIdentity property value. The targetUserIdentity property
     * @return UserIdentity|null
    */
    public function getTargetUserIdentity(): ?UserIdentity {
        $val = $this->getBackingStore()->get('targetUserIdentity');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetUserIdentity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('sourceUserIdentity', $this->getSourceUserIdentity());
        $writer->writeObjectValue('targetUserIdentity', $this->getTargetUserIdentity());
    }

    /**
     * Sets the sourceUserIdentity property value. The sourceUserIdentity property
     * @param UserIdentity|null $value Value to set for the sourceUserIdentity property.
    */
    public function setSourceUserIdentity(?UserIdentity $value): void {
        $this->getBackingStore()->set('sourceUserIdentity', $value);
    }

    /**
     * Sets the targetUserIdentity property value. The targetUserIdentity property
     * @param UserIdentity|null $value Value to set for the targetUserIdentity property.
    */
    public function setTargetUserIdentity(?UserIdentity $value): void {
        $this->getBackingStore()->set('targetUserIdentity', $value);
    }

}
