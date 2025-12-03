<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointRoot {
        return new SharePointRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'migrations' => fn(ParseNode $n) => $o->setMigrations($n->getObjectValue([SharePointMigrationsRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the migrations property value. The migration operations for cross-organization SharePoint migrations.
     * @return SharePointMigrationsRoot|null
    */
    public function getMigrations(): ?SharePointMigrationsRoot {
        $val = $this->getBackingStore()->get('migrations');
        if (is_null($val) || $val instanceof SharePointMigrationsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('migrations', $this->getMigrations());
    }

    /**
     * Sets the migrations property value. The migration operations for cross-organization SharePoint migrations.
     * @param SharePointMigrationsRoot|null $value Value to set for the migrations property.
    */
    public function setMigrations(?SharePointMigrationsRoot $value): void {
        $this->getBackingStore()->set('migrations', $value);
    }

}
