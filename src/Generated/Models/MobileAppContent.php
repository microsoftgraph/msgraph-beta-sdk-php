<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppContent extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<MobileContainedApp>|null $containedApps The collection of contained apps in a MobileLobApp acting as a package.
    */
    private ?array $containedApps = null;
    
    /**
     * @var array<MobileAppContentFile>|null $files The list of files for this app content version.
    */
    private ?array $files = null;
    
    /**
     * Instantiates a new mobileAppContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppContent {
        return new MobileAppContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the containedApps property value. The collection of contained apps in a MobileLobApp acting as a package.
     * @return array<MobileContainedApp>|null
    */
    public function getContainedApps(): ?array {
        return $this->containedApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containedApps' => function (ParseNode $n) use ($o) { $o->setContainedApps($n->getCollectionOfObjectValues(array(MobileContainedApp::class, 'createFromDiscriminatorValue'))); },
            'files' => function (ParseNode $n) use ($o) { $o->setFiles($n->getCollectionOfObjectValues(array(MobileAppContentFile::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the files property value. The list of files for this app content version.
     * @return array<MobileAppContentFile>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containedApps', $this->containedApps);
        $writer->writeCollectionOfObjectValues('files', $this->files);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the containedApps property value. The collection of contained apps in a MobileLobApp acting as a package.
     *  @param array<MobileContainedApp>|null $value Value to set for the containedApps property.
    */
    public function setContainedApps(?array $value ): void {
        $this->containedApps = $value;
    }

    /**
     * Sets the files property value. The list of files for this app content version.
     *  @param array<MobileAppContentFile>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value ): void {
        $this->files = $value;
    }

}
