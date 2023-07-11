<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for Windows Phone 8.1 AppX Bundle Line Of Business apps. Inherits from graph.windowsPhone81AppX (which is also to be deprecated at the same time). Will be deprecated in February 2023.
*/
class WindowsPhone81AppXBundle extends WindowsPhone81AppX implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new windowsPhone81AppXBundle and sets the default values.
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
        $val = $this->getBackingStore()->get('appXPackageInformationList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsPackageInformation::class);
            /** @var array<WindowsPackageInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appXPackageInformationList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appXPackageInformationList' => fn(ParseNode $n) => $o->setAppXPackageInformationList($n->getCollectionOfObjectValues([WindowsPackageInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appXPackageInformationList', $this->getAppXPackageInformationList());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the appXPackageInformationList property value. The list of AppX Package Information.
     * @param array<WindowsPackageInformation>|null $value Value to set for the appXPackageInformationList property.
    */
    public function setAppXPackageInformationList(?array $value): void {
        $this->getBackingStore()->set('appXPackageInformationList', $value);
    }

}
