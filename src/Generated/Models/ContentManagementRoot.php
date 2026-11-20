<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\ContentManagementRepository;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The contentManagement segment under `/security`. Groups the content-management resources(connected repositories) under a single node.
*/
class ContentManagementRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ContentManagementRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentManagementRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentManagementRoot {
        return new ContentManagementRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'repositories' => fn(ParseNode $n) => $o->setRepositories($n->getCollectionOfObjectValues([ContentManagementRepository::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the repositories property value. Connected source-control repositories that deliver security content as code.
     * @return array<ContentManagementRepository>|null
    */
    public function getRepositories(): ?array {
        $val = $this->getBackingStore()->get('repositories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentManagementRepository::class);
            /** @var array<ContentManagementRepository>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repositories'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('repositories', $this->getRepositories());
    }

    /**
     * Sets the repositories property value. Connected source-control repositories that deliver security content as code.
     * @param array<ContentManagementRepository>|null $value Value to set for the repositories property.
    */
    public function setRepositories(?array $value): void {
        $this->getBackingStore()->set('repositories', $value);
    }

}
