<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * win32MobileAppCatalogPackage extends mobileAppCatalogPackage by providing information necessary for the creation of a win32CatalogApp instance.
*/
class Win32MobileAppCatalogPackage extends MobileAppCatalogPackage implements Parsable 
{
    /**
     * Instantiates a new Win32MobileAppCatalogPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32MobileAppCatalogPackage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32MobileAppCatalogPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32MobileAppCatalogPackage {
        return new Win32MobileAppCatalogPackage();
    }

    /**
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('applicableArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableArchitectures'");
    }

    /**
     * Gets the branchDisplayName property value. The product branch name, which is a specific subset of product functionality as defined by the publisher (example: "Fabrikam for Business (x64)"). A specific product will have one or more branchDisplayNames. Read-only. Supports $filter, $search, $select. This property is read-only.
     * @return string|null
    */
    public function getBranchDisplayName(): ?string {
        $val = $this->getBackingStore()->get('branchDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'branchDisplayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => fn(ParseNode $n) => $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'branchDisplayName' => fn(ParseNode $n) => $o->setBranchDisplayName($n->getStringValue()),
            'locales' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocales($val);
            },
            'packageAutoUpdateCapable' => fn(ParseNode $n) => $o->setPackageAutoUpdateCapable($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the locales property value. One or more locale(s) supported by the branch. Value is a two-letter ISO 639 language tags with optional two-letter subtags (example: en-US, ko, de, de-DE), or mul to indicate multi-language. Read-only. This property is read-only.
     * @return array<string>|null
    */
    public function getLocales(): ?array {
        $val = $this->getBackingStore()->get('locales');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locales'");
    }

    /**
     * Gets the packageAutoUpdateCapable property value. Indicates whether the package is capable to auto-update to latest when software/application updates are available. When TRUE, it indicates it is an auto-updating application. When FALSE, it indicates that it is not an auto-updating application. This property is read-only.
     * @return bool|null
    */
    public function getPackageAutoUpdateCapable(): ?bool {
        $val = $this->getBackingStore()->get('packageAutoUpdateCapable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageAutoUpdateCapable'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->getApplicableArchitectures());
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('applicableArchitectures', $value);
    }

    /**
     * Sets the branchDisplayName property value. The product branch name, which is a specific subset of product functionality as defined by the publisher (example: "Fabrikam for Business (x64)"). A specific product will have one or more branchDisplayNames. Read-only. Supports $filter, $search, $select. This property is read-only.
     * @param string|null $value Value to set for the branchDisplayName property.
    */
    public function setBranchDisplayName(?string $value): void {
        $this->getBackingStore()->set('branchDisplayName', $value);
    }

    /**
     * Sets the locales property value. One or more locale(s) supported by the branch. Value is a two-letter ISO 639 language tags with optional two-letter subtags (example: en-US, ko, de, de-DE), or mul to indicate multi-language. Read-only. This property is read-only.
     * @param array<string>|null $value Value to set for the locales property.
    */
    public function setLocales(?array $value): void {
        $this->getBackingStore()->set('locales', $value);
    }

    /**
     * Sets the packageAutoUpdateCapable property value. Indicates whether the package is capable to auto-update to latest when software/application updates are available. When TRUE, it indicates it is an auto-updating application. When FALSE, it indicates that it is not an auto-updating application. This property is read-only.
     * @param bool|null $value Value to set for the packageAutoUpdateCapable property.
    */
    public function setPackageAutoUpdateCapable(?bool $value): void {
        $this->getBackingStore()->set('packageAutoUpdateCapable', $value);
    }

}
