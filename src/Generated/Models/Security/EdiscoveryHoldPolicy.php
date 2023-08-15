<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoveryHoldPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new ediscoveryHoldPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryHoldPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryHoldPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryHoldPolicy {
        return new EdiscoveryHoldPolicy();
    }

    /**
     * Gets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        $val = $this->getBackingStore()->get('contentQuery');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentQuery'");
    }

    /**
     * Gets the errors property value. Lists any errors that happened while placing the hold.
     * @return array<string>|null
    */
    public function getErrors(): ?array {
        $val = $this->getBackingStore()->get('errors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentQuery' => fn(ParseNode $n) => $o->setContentQuery($n->getStringValue()),
            'errors' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setErrors($val);
            },
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'siteSources' => fn(ParseNode $n) => $o->setSiteSources($n->getCollectionOfObjectValues([\Microsoft\Graph\Beta\Generated\Models\Security\SiteSource::class, 'createFromDiscriminatorValue'])),
            'userSources' => fn(ParseNode $n) => $o->setUserSources($n->getCollectionOfObjectValues([\Microsoft\Graph\Beta\Generated\Models\Security\UserSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the siteSources property value. Data sources that represent SharePoint sites.
     * @return array<\Microsoft\Graph\Beta\Generated\Models\Security\SiteSource>|null
    */
    public function getSiteSources(): ?array {
        $val = $this->getBackingStore()->get('siteSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, \Microsoft\Graph\Beta\Generated\Models\Security\SiteSource::class);
            /** @var array<\Microsoft\Graph\Beta\Generated\Models\Security\SiteSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteSources'");
    }

    /**
     * Gets the userSources property value. Data sources that represent Exchange mailboxes.
     * @return array<\Microsoft\Graph\Beta\Generated\Models\Security\UserSource>|null
    */
    public function getUserSources(): ?array {
        $val = $this->getBackingStore()->get('userSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, \Microsoft\Graph\Beta\Generated\Models\Security\UserSource::class);
            /** @var array<\Microsoft\Graph\Beta\Generated\Models\Security\UserSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentQuery', $this->getContentQuery());
        $writer->writeCollectionOfPrimitiveValues('errors', $this->getErrors());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeCollectionOfObjectValues('siteSources', $this->getSiteSources());
        $writer->writeCollectionOfObjectValues('userSources', $this->getUserSources());
    }

    /**
     * Sets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value): void {
        $this->getBackingStore()->set('contentQuery', $value);
    }

    /**
     * Sets the errors property value. Lists any errors that happened while placing the hold.
     * @param array<string>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the siteSources property value. Data sources that represent SharePoint sites.
     * @param array<\Microsoft\Graph\Beta\Generated\Models\Security\SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value): void {
        $this->getBackingStore()->set('siteSources', $value);
    }

    /**
     * Sets the userSources property value. Data sources that represent Exchange mailboxes.
     * @param array<\Microsoft\Graph\Beta\Generated\Models\Security\UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value): void {
        $this->getBackingStore()->set('userSources', $value);
    }

}
