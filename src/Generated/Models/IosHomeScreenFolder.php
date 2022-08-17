<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosHomeScreenFolder extends IosHomeScreenItem implements Parsable 
{
    /**
     * @var array<IosHomeScreenFolderPage>|null $pages Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
    */
    private ?array $pages = null;
    
    /**
     * Instantiates a new IosHomeScreenFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosHomeScreenFolder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosHomeScreenFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosHomeScreenFolder {
        return new IosHomeScreenFolder();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'pages' => function (ParseNode $n) use ($o) { $o->setPages($n->getCollectionOfObjectValues(array(IosHomeScreenFolderPage::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the pages property value. Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenFolderPage>|null
    */
    public function getPages(): ?array {
        return $this->pages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('pages', $this->pages);
    }

    /**
     * Sets the pages property value. Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenFolderPage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value ): void {
        $this->pages = $value;
    }

}
