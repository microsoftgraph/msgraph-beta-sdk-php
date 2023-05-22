<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileContentProperties extends ContentProperties implements Parsable 
{
    /**
     * Instantiates a new FileContentProperties and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fileContentProperties');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileContentProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileContentProperties {
        return new FileContentProperties();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isVisibleOnlyToOneDriveOwner' => fn(ParseNode $n) => $o->setIsVisibleOnlyToOneDriveOwner($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isVisibleOnlyToOneDriveOwner property value. The isVisibleOnlyToOneDriveOwner property
     * @return bool|null
    */
    public function getIsVisibleOnlyToOneDriveOwner(): ?bool {
        return $this->getBackingStore()->get('isVisibleOnlyToOneDriveOwner');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isVisibleOnlyToOneDriveOwner', $this->getIsVisibleOnlyToOneDriveOwner());
    }

    /**
     * Sets the isVisibleOnlyToOneDriveOwner property value. The isVisibleOnlyToOneDriveOwner property
     * @param bool|null $value Value to set for the isVisibleOnlyToOneDriveOwner property.
    */
    public function setIsVisibleOnlyToOneDriveOwner(?bool $value): void {
        $this->getBackingStore()->set('isVisibleOnlyToOneDriveOwner', $value);
    }

}
