<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81AppXBundle extends WindowsPhone81AppX implements Parsable 
{
    /**
     * @var array<WindowsPackageInformation>|null $appXPackageInformationList The list of AppX Package Information.
    */
    private ?array $appXPackageInformationList = null;
    
    /**
     * Instantiates a new WindowsPhone81AppXBundle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhone81AppXBundle');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81AppXBundle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81AppXBundle {
        return new WindowsPhone81AppXBundle();
    }

    /**
     * Gets the appXPackageInformationList property value. The list of AppX Package Information.
     * @return array<WindowsPackageInformation>|null
    */
    public function getAppXPackageInformationList(): ?array {
        return $this->appXPackageInformationList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appXPackageInformationList' => function (ParseNode $n) use ($o) { $o->setAppXPackageInformationList($n->getCollectionOfObjectValues(array(WindowsPackageInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appXPackageInformationList', $this->appXPackageInformationList);
    }

    /**
     * Sets the appXPackageInformationList property value. The list of AppX Package Information.
     *  @param array<WindowsPackageInformation>|null $value Value to set for the appXPackageInformationList property.
    */
    public function setAppXPackageInformationList(?array $value ): void {
        $this->appXPackageInformationList = $value;
    }

}
