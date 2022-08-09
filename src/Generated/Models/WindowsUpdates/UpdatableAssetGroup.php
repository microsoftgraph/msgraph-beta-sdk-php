<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdatableAssetGroup extends UpdatableAsset implements Parsable 
{
    /**
     * @var array<UpdatableAsset>|null $members Members of the group. Read-only.
    */
    private ?array $members = null;
    
    /**
     * Instantiates a new UpdatableAssetGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.updatableAssetGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatableAssetGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatableAssetGroup {
        return new UpdatableAssetGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(UpdatableAsset::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the members property value. Members of the group. Read-only.
     * @return array<UpdatableAsset>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('members', $this->members);
    }

    /**
     * Sets the members property value. Members of the group. Read-only.
     *  @param array<UpdatableAsset>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

}
