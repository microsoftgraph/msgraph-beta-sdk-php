<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Group;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedGroupSource extends DataSource implements Parsable 
{
    /**
     * @var Group|null $group The group property
    */
    private ?Group $group = null;
    
    /**
     * @var SourceType|null $includedSources Specifies which sources are included in this group. Possible values are: mailbox, site.
    */
    private ?SourceType $includedSources = null;
    
    /**
     * Instantiates a new UnifiedGroupSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedGroupSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedGroupSource {
        return new UnifiedGroupSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => function (ParseNode $n) use ($o) { $o->setGroup($n->getObjectValue(array(Group::class, 'createFromDiscriminatorValue'))); },
            'includedSources' => function (ParseNode $n) use ($o) { $o->setIncludedSources($n->getEnumValue(SourceType::class)); },
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->group;
    }

    /**
     * Gets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @return SourceType|null
    */
    public function getIncludedSources(): ?SourceType {
        return $this->includedSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->group);
        $writer->writeEnumValue('includedSources', $this->includedSources);
    }

    /**
     * Sets the group property value. The group property
     *  @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value ): void {
        $this->group = $value;
    }

    /**
     * Sets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     *  @param SourceType|null $value Value to set for the includedSources property.
    */
    public function setIncludedSources(?SourceType $value ): void {
        $this->includedSources = $value;
    }

}
