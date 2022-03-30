<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Group;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedGroupSource extends DataSource 
{
    /** @var Group|null $group  */
    private ?Group $group = null;
    
    /** @var SourceType|null $includedSources Specifies which sources are included in this group. Possible values are: mailbox, site. */
    private ?SourceType $includedSources = null;
    
    /**
     * Instantiates a new unifiedGroupSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedGroupSource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedGroupSource {
        return new UnifiedGroupSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'group' => function (self $o, ParseNode $n) { $o->setGroup($n->getObjectValue(Group::class)); },
            'includedSources' => function (self $o, ParseNode $n) { $o->setIncludedSources($n->getEnumValue(SourceType::class)); },
        ]);
    }

    /**
     * Gets the group property value. 
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
     * Sets the group property value. 
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
